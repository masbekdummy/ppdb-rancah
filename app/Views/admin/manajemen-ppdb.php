<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Manajemen PPDB - Admin <?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h3>Manajemen PPDB <?= $status ?></h3>
    <div class="card">
        <div class="card-body">
            <a href="<?= base_url('manajemen-ppdb/report?filter=' . $status);?>" class="btn btn-primary"><i data-feather="file-text" class="me-1"></i> Report</a>
            <table class='table table-striped' id="table1">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nisn</th>
                    <th>Nama Lengkap</th>
                    <th>No HP</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $statusPendaftaran = [
                    'Belum Lengkap' => 'warning',
                    'Diproses' => 'secondary',
                    'Lulus' => 'primary',
                    'Gagal' => 'danger',
                ];
                $jenisKelamin = [
                    'L' => 'Laki-Laki',
                    'P' => 'Perempuan',
                ];
                $kewarganegaraan = [
                    'WNI' => 'WNI',
                    'WNA' => 'WNA',
                ];
                $agama = [
                    'Islam' => 'Islam',
                    'Kristen' => 'Kristen',
                    'Katolik' => 'Katolik',
                    'Hindu' => 'Hindu',
                    'Budha' => 'Budha',
                    'Khonghucu' => 'Khonghucu',
                ];
                $no = 1;
                foreach ($ppdb as $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $item['nisn'] ?></td>
                        <td><?= $item['nama_lengkap'] ?></td>
                        <td><?= $item['no_telp'] ?></td>
                        <td>
                            <span class="badge bg-<?= $statusPendaftaran[$item['status']] ?>"><?= $item['status'] ?></span>
                        </td>
                        <td>
                            <button title="Detail" data-bs-toggle="modal"
                                    data-bs-target="#detail-modal<?= $item['ppdb_id'] ?>"
                                    class="btn btn-sm btn-light px-2 py-1">
                                <i data-feather="eye" style="width: 13px; height: 13px;"></i>
                            </button>
                            <button title="edit" data-bs-toggle="modal"
                                    data-bs-target="#edit-modal"
                                    data-bs-pendaftar='<?= json_encode($item) ?>'
                                    class="btn btn-primary px-2 py-1 btn-edit">
                                <i data-feather="edit" style="width: 13px; height: 13px;"></i>
                            </button>
                            <button title="Ubah Password" data-bs-toggle="modal"
                                    data-bs-target="#change-password-modal<?= $item['ppdb_id'] ?>"
                                    class="btn btn-info px-2 py-1 btn-change">
                                <i data-feather="key" style="width: 13px; height: 13px;"></i>
                            </button>
                            <a href="<?= base_url('manajemen-ppdb/delete/' . $item['ppdb_id']) ?>"
                               class="btn btn-danger px-2 py-1 hapus-ppdb">
                                <i data-feather="trash" style="width: 13px; height: 13px;"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade text-left" id="edit-modal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit PPDB</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form form-edit-ppdb"
                          enctype="multipart/form-data">
                        <?= $this->include('admin/form-ppdb') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($ppdb as $item) : ?>
    <!-- Detail Modal -->
    <div class="modal fade text-left" id="detail-modal<?= $item['ppdb_id'] ?>" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Siswa</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Calon Peserta Didik : </h5>
                    <table class="table-detail">
                        <tr>
                            <td>NISN</td>
                            <td><span class="me-2">:</span> <?= $item['nisn'] ?></td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?= $item['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['nama_panggilan'] ? $item['nama_panggilan'] : '-'; ?>
                            </td>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $item['jenis_kelamin'] ? $jenisKelamin[$item['jenis_kelamin']] : '-' ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['tanggal_lahir'] ? $item['tanggal_lahir'] : '-'; ?>
                            </td>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $item['tempat_lahir'] ? $item['tempat_lahir'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td><span class="me-2">:</span> <?= $item['asal_sekolah'] ? $item['asal_sekolah'] : '-'; ?>
                            </td>
                            <td>No HP/WA</td>
                            <td>:</td>
                            <td><?= $item['no_telp'] ? $item['no_telp'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['kewarganegaraan'] ? $item['kewarganegaraan'] : '-'; ?>
                            </td>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $item['agama'] ? $item['agama'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Jarak Tempuh</td>
                            <td><span class="me-2">:</span><?= $item['jarak_tempuh'] ? $item['jarak_tempuh'] : '-'; ?>
                            </td>
                            <td>Jumlah Saudara</td>
                            <td>:</td>
                            <td><?= $item['jumlah_saudara'] ? $item['jumlah_saudara'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['anak_ke'] ? $item['anak_ke'] : '-'; ?>
                            </td>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $item['alamat'] ? $item['alamat'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><span class="me-2">:</span> <?= $item['status'] ? $item['status'] : '-'; ?></td>
                            <td>File Ijazah</td>
                            <td>:</td>
                            <td>
                                <?php if ($item['file_ijazah']): ?>
                                    <div class="my-2">
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#file-modal"
                                                data-url="<?= base_url('file-ijazah/' . $item['file_ijazah']) ?>"
                                                class="btn btn-link btn-modal"><i
                                                    data-feather="file-text"></i> File-Ijazah.pdf
                                        </button>
                                    </div>
                                <?php else: ?>
                                    -
                                <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td>File Rapot</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">:</span>
                                    <?php if ($item['file_rapot']): ?>
                                        <div class="my-2">
                                            <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#file-modal"
                                                    data-url="<?= base_url('file-rapot/' . $item['file_rapot']) ?>"
                                                    class="btn btn-link btn-modal"><i
                                                        data-feather="file-text"></i> File-Rapot.pdf
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>KTP Orang Tua</td>
                            <td>:</td>
                            <td>
                                <?php if ($item['ktp_orang_tua']): ?>
                                    <div class="my-2">
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#file-modal"
                                                data-url="<?= base_url('ktp-orang-tua/' . $item['ktp_orang_tua']) ?>"
                                                class="btn btn-link btn-modal"><i
                                                    data-feather="file-text"></i> KTP.pdf
                                        </button>
                                    </div>
                                <?php else: ?>
                                    -
                                <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td>Akta Kelahiran</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">:</span>
                                    <?php if ($item['akta_kelahiran']): ?>
                                        <div class="my-2">
                                            <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#file-modal"
                                                    data-url="<?= base_url('akta-kelahiran/' . $item['akta_kelahiran']) ?>"
                                                    class="btn btn-link btn-modal"><i
                                                        data-feather="file-text"></i> Akta.pdf
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>Surat Pernyataan</td>
                            <td>:</td>
                            <td>
                                <?php if ($item['surat_pernyataan']): ?>
                                    <div class="my-2">
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#file-modal"
                                                data-url="<?= base_url('surat-pernyataan/' . $item['surat_pernyataan']) ?>"
                                                class="btn btn-link btn-modal"><i
                                                    data-feather="file-text"></i> Surat.pdf
                                        </button>
                                    </div>
                                <?php else: ?>
                                    -
                                <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td>Kartu Kesejahtraaan</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">:</span>
                                    <?php if ($item['kartu_kesejahtraan']): ?>
                                        <div class="my-2">
                                            <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#file-modal"
                                                    data-url="<?= base_url('kartu-kesejahtraan' . $item['kartu_kesejahtraan']) ?>"
                                                    class="btn btn-link btn-modal"><i
                                                        data-feather="file-text"></i> Kesejahtraan.pdf
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>Sertifikat Kejuaraan</td>
                            <td>:</td>
                            <td>
                                <?php if ($item['sertifikat_kejuaraan']): ?>
                                    <div class="my-2">
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#file-modal"
                                                data-url="<?= base_url('sertifikat-kejuaraan/' . $item['sertifikat_kejuaraan']) ?>"
                                                class="btn btn-link btn-modal"><i
                                                    data-feather="file-text"></i> Sertifikat Kejuaraan.pdf
                                        </button>
                                    </div>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                        </tr>
                        <tr>
                            <td>Foto Siswa</td>
                            <td>
                                <span class="me-2">:</span><img src="<?= base_url('foto-siswa/' . $item['foto_siswa']) ?>"
                                     class="<?= $item['foto_siswa'] ? '' : 'd-none' ?> shadow rounded" width="150"
                                     alt="Foto Siswa">
                                <?= $item['foto_siswa'] ? '' : '-' ?>
                            </td>
                        </tr>
                    </table>

                    <h5 class="mt-2">Data Ayah : </h5>
                    <table class="table-detail">
                        <tr>
                            <td>Nama Ayah</td>
                            <td><span class="me-2">:</span> <?= $item['nama_ayah'] ?></td>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $item['tempat_lahir_ayah'] ? $item['tempat_lahir_ayah'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['tanggal_lahir_ayah'] ? $item['tanggal_lahir_ayah'] : '-'; ?>
                            </td>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $item['pekerjaan_ayah'] ? $item['pekerjaan_ayah'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['keterangan_ayah'] ? $item['keterangan_ayah'] : '-'; ?>
                            </td>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $item['alamat_ayah'] ? $item['alamat_ayah'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"><h5 class="my-1" style="margin-left: -.25rem">Data Ibu : </h5></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td><span class="me-2">:</span> <?= $item['nama_ibu'] ? $item['nama_ibu'] : '-'; ?></td>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $item['tempat_lahir_ibu'] ? $item['tempat_lahir_ibu'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['tanggal_lahir_ibu'] ? $item['tanggal_lahir_ibu'] : '-'; ?>
                            </td>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $item['pekerjaan_ibu'] ? $item['pekerjaan_ibu'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['keterangan_ibu'] ? $item['keterangan_ibu'] : '-'; ?>
                            </td>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $item['alamat_ibu'] ? $item['alamat_ibu'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"><h5 class="my-1" style="margin-left: -.25rem">Data Wali : </h5></td>
                        </tr>
                        <tr>
                            <td>Nama Wali</td>
                            <td><span class="me-2">:</span> <?= $item['nama_wali'] ? $item['nama_wali'] : '-'; ?></td>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $item['tempat_lahir_wali'] ? $item['tempat_lahir_wali'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <span class="me-2">:</span> <?= $item['tanggal_lahir_wali'] ? $item['tanggal_lahir_wali'] : '-'; ?>
                            </td>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $item['pekerjaan_wali'] ? $item['pekerjaan_wali'] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><span class="me-2">:</span> <?= $item['alamat_wali'] ? $item['alamat_wali'] : '-'; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade text-left" id="change-password-modal<?= $item['ppdb_id'] ?>" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Password <?= $item['nama_lengkap'] ?></h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('manajemen-ppdb/' . $item['ppdb_id'] . '/change-password') ?>"
                          method="post" class="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="password">Password Baru</label>
                                        <input required type="password" id="password"
                                               class="form-control <?= validation_show_error('password') ? 'is-invalid' : '' ?>"
                                               name="password">
                                        <span class="text-danger"><?= validation_show_error('password') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <button type="submit" class="btn btn-primary mb-1">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
    <div class="modal fade text-left" id="file-modal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1"
         aria-hidden="true">
        <div class="position-absolute" style="top: 5px; right: 10px">
            <button type="button" class="close bg-transparent border-0 text-white rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                <i data-feather="x" style="width: 30px; height: 30px;"></i>
            </button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <iframe class="show-file-modal" width="100%" type="application/pdf"
                        style="height: 90vh">
                </iframe>
            </div>
        </div>
    </div>

    <script>
        const allBtnModal = document.querySelectorAll('.btn-modal');
        const fileModal = document.querySelector('.show-file-modal');
        allBtnModal.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const url = btn.getAttribute('data-url');
                fileModal.setAttribute('src', url);
            });
        });
    </script>
<?= $this->endSection('') ?>