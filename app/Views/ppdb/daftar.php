<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome/css/all.min.css') ?>">
    <title>PPDB - Daftar</title>
    <style>
        body {
            background-color: #f3f4f6;
        }

        .btn-link {
            color: #343a40;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row bg-white rounded bg-white container shadow align-items-center py-3">
            <!-- Kembali Ke Home -->
            <div class="d-flex mb-3">
                <a href="<?= base_url() ?>" class="btn btn-link text-left">&larr; Kembali Ke Home</a>
                <button type="button" class="btn btn-info ml-3" data-bs-toggle="modal" data-bs-target="#ppdbModal">
                    <i class="fas fa-info-circle"></i> Informasi Seleksi PPDB
                </button>
            </div>
            <div class="modal fade" id="ppdbModal" tabindex="-1" aria-labelledby="ppdbModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ppdbModalLabel">Informasi Seleksi PPDB</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <h6>1. Jalur Pendaftaran</h6>
                            <ul>
                                <li><strong>Jalur Afirmasi:</strong> Diperuntukkan bagi calon peserta didik dari keluarga kurang mampu yang dibuktikan dengan dokumen seperti Kartu Indonesia Pintar (KIP) atau surat keterangan dari instansi terkait.</li>
                                <li><strong>Jalur Prestasi:</strong> Diperuntukkan bagi calon peserta didik yang memiliki prestasi di bidang akademik maupun non-akademik yang dibuktikan dengan sertifikat atau piagam penghargaan.</li>
                                <li><strong>Jalur Mutasi:</strong> Diperuntukkan bagi calon peserta didik yang mengikuti perpindahan tugas orang tua/wali atau perpindahan tempat tinggal, dengan melampirkan surat keterangan mutasi.</li>
                            </ul>

                            <h6>2. Alur dan Proses Seleksi</h6>
                            <ol>
                                <li>Calon peserta didik melakukan pendaftaran secara online melalui situs resmi PPDB.</li>
                                <li>Calon peserta didik mengunggah dokumen persyaratan sesuai jalur yang dipilih.</li>
                                <li>Panitia PPDB melakukan verifikasi terhadap dokumen yang diunggah.</li>
                                <li>Sistem melakukan seleksi otomatis berdasarkan kriteria masing-masing jalur.</li>
                                <li>Hasil seleksi diumumkan melalui website resmi PPDB.</li>
                                <li>Calon peserta didik yang lulus seleksi diwajibkan melakukan daftar ulang secara langsung ke sekolah.</li>
                            </ol>

                            <h6>3. Kriteria Penerimaan</h6>
                            <ul>
                                <li><strong>Jalur Afirmasi:</strong> Bukti kepemilikan KIP atau surat keterangan tidak mampu, serta validitas data domisili.</li>
                                <li><strong>Jalur Prestasi:</strong> Nilai rata-rata raport, jumlah dan tingkat kejuaraan dari sertifikat atau piagam yang dimiliki.</li>
                                <li><strong>Jalur Mutasi:</strong> Surat keterangan mutasi tugas orang tua atau surat pindah domisili.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="d-flex align-items-center flex-column col-md-6">
                <h3 class="text-primary text-center">PENDAFTARAN PPDB</h3>
                <img src="<?= base_url('images/logo.png') ?>" class="w-75" alt="Logo">
            </div>
            <div class="col-md-6">
                <form action="<?= base_url('daftar') ?>" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" required class="form-control <?= validation_show_error('nisn') ? 'is-invalid' : '' ?>" value="<?= set_value('nisn') ?>" id="nisn" name="nisn" placeholder="nisn">
                        <span class="text-danger"><?= validation_show_error('nisn') ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" required class="form-control <?= validation_show_error('nama_lengkap') ? 'is-invalid' : '' ?>" value="<?= set_value('nama_lengkap') ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap....">
                        <span class="text-danger"><?= validation_show_error('nama_lengkap') ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">NO HP/WA</label>
                        <input type="number" required class="form-control <?= validation_show_error('no_telp') ? 'is-invalid' : '' ?>" value="<?= set_value('no_telp') ?>" id="no_telp" name="no_telp" placeholder="no telp">
                        <span class="text-danger"><?= validation_show_error('no_telp') ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" required class="form-control <?= validation_show_error('tempat_lahir') ? 'is-invalid' : '' ?>" value="<?= set_value('tempat_lahir') ?>" id="tempat_lahir" name="tempat_lahir" placeholder="...........">
                        <span class="text-danger"><?= validation_show_error('tempat_lahir') ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" required class="form-control <?= validation_show_error('tanggal_lahir') ? 'is-invalid' : '' ?>" value="<?= set_value('tanggal_lahir') ?>" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd/mm/yy">
                        <span class="text-danger"><?= validation_show_error('tanggal_lahir') ?></span>
                    </div>
                    <!-- Custom Dropdown -->
                    <div class="mb-3">
                        <label for="jalur_pendaftaran" class="form-label">Jalur Pendaftaran</label>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle w-100 text-start" type="button" id="jalurDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                -- Pilih Jalur Pendaftaran --
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="jalurDropdown">
                                <li class="d-flex justify-content-between align-items-center px-3 py-2 jalur-option" data-value="Afirmasi">
                                    Afirmasi
                                    <button type="button" class="btn btn-sm btn-link text-info p-0" data-bs-toggle="modal" data-bs-target="#infoAfirmasi">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </li>
                                <li class="d-flex justify-content-between align-items-center px-3 py-2 jalur-option" data-value="Prestasi">
                                    Prestasi
                                    <button type="button" class="btn btn-sm btn-link text-info p-0" data-bs-toggle="modal" data-bs-target="#infoPrestasi">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </li>
                                <li class="d-flex justify-content-between align-items-center px-3 py-2 jalur-option" data-value="Mutasi">
                                    Mutasi
                                    <button type="button" class="btn btn-sm btn-link text-info p-0" data-bs-toggle="modal" data-bs-target="#infoMutasi">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Hidden input to store selection -->
                        <input type="hidden" name="jalur_pendaftaran" id="jalur_pendaftaran">
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="<?= base_url('login') ?>" class="btn btn-link">Sudah Mendaftar?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Afirmasi -->
    <div class="modal fade" id="infoAfirmasi" tabindex="-1" aria-labelledby="infoAfirmasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoAfirmasiLabel">Info Jalur Afirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    Diperuntukkan bagi calon peserta didik dari keluarga kurang mampu yang dibuktikan dengan KIP atau surat keterangan resmi.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Prestasi -->
    <div class="modal fade" id="infoPrestasi" tabindex="-1" aria-labelledby="infoPrestasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoPrestasiLabel">Info Jalur Prestasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    Untuk peserta didik dengan prestasi akademik/non-akademik yang dibuktikan dengan sertifikat/piagam.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mutasi -->
    <div class="modal fade" id="infoMutasi" tabindex="-1" aria-labelledby="infoMutasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoMutasiLabel">Info Jalur Mutasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    Untuk peserta didik yang mengikuti perpindahan tugas orang tua/wali atau pindah domisili dengan surat resmi.
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        document.querySelectorAll('.jalur-option').forEach(item => {
            item.addEventListener('click', function(e) {
                if (!e.target.closest('button')) {
                    document.getElementById('jalurDropdown').innerText = this.dataset.value;
                    document.getElementById('jalur_pendaftaran').value = this.dataset.value;
                }
            });
        });
    </script>

</body>

</html>