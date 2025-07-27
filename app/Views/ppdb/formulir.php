<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Formulir - PPDB <?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
$penghasilan = [
    '< Rp. 1 Juta',
    'Rp. 1 Juta - Rp. 2 Juta',
    'Rp. 2 Juta - Rp. 3 Juta',
    '> Rp. 3 Juta',
];

$keterangan = [
    'Masih Hidup',
    'Meninggal'
];


?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom d-flex justify-content-between">
                <h4>Formulir Pendaftaran</h4>
                <?php if ($percentComplete < 100) : ?>
                    <button class="btn btn-primary btn-non-completed">Cetak Formulir</button>
                <?php else : ?>
                    <a href="<?= base_url('cetak-formulir') ?>" class="btn btn-primary">Cetak Formulir</a>
                <?php endif; ?>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="progress progress-primary mb-2">
                        <div class="progress-bar" role="progressbar" style="width: <?= $percentComplete ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="text-primary"><?= $percentComplete ?>%</h5>
                    <form action="<?= base_url('formulir') ?>" method="post" class="form" enctype="multipart/form-data">
                        <div class="my-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswa" role="tab" aria-controls="siswa" aria-selected="true">Data Siswa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#ayah" role="tab" aria-controls="ayah" aria-selected="false">Data Ayah</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ibu" role="tab" aria-controls="ibu" aria-selected="false">Data Ibu</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="false">Data Wali</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="siswa" role="tabpanel" aria-labelledby="siswa-tab">
                                <?= $this->include('ppdb/formulir-siswa'); ?>
                            </div>
                            <div class="tab-pane fade" id="ayah" role="tabpanel" aria-labelledby="ayah-tab">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Ayah</label>
                                            <input type="text" id="nama_ayah" value="<?= set_value('nama_ayah', $pendaftar['nama_ayah']) ?>" class="form-control <?= validation_show_error('nama_ayah') ? 'is-invalid' : '' ?>" name="nama_ayah">
                                            <span class="text-danger"><?= validation_show_error('nama_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                                            <input type="text" id="tempat_lahir_ayah" value="<?= set_value('tempat_lahir_ayah', $pendaftar['tempat_lahir_ayah']) ?>" class="form-control <?= validation_show_error('tempat_lahir_ayah') ? 'is-invalid' : '' ?>" name="tempat_lahir_ayah">
                                            <span class="text-danger"><?= validation_show_error('tempat_lahir_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                                            <input type="date" id="tanggal_lahir_ayah" value="<?= set_value('tanggal_lahir_ayah', $pendaftar['tanggal_lahir_ayah']) ?>" class="form-control <?= validation_show_error('tanggal_lahir_ayah') ? 'is-invalid' : '' ?>" placeholder="Nisn" name="tanggal_lahir_ayah">
                                            <span class="text-danger"><?= validation_show_error('tanggal_lahir_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" id="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah', $pendaftar['pekerjaan_ayah']) ?>" class="form-control <?= validation_show_error('pekerjaan_ayah') ? 'is-invalid' : '' ?>" name="pekerjaan_ayah">
                                            <span class="text-danger"><?= validation_show_error('pekerjaan_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                            <select id="penghasilan_ayah" class="form-select <?= validation_show_error('penghasilan_ayah') ? 'is-invalid' : '' ?>" name="penghasilan_ayah">
                                                <option value=""></option>
                                                <?php foreach ($penghasilan as $item) : ?>
                                                    <option value="<?= $item ?>" <?= $item === $pendaftar['penghasilan_ayah'] ? 'selected' : '' ?>><?= $item ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="text-danger"><?= validation_show_error('penghasilan_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keterangan_ayah">Keterangan</label>
                                            <select id="keterangan_ayah" class="form-select <?= validation_show_error('keterangan_ayah') ? 'is-invalid' : '' ?>" name="keterangan_ayah">
                                                <option value=""></option>
                                                <?php foreach ($keterangan as $item) : ?>
                                                    <option value="<?= $item ?>" <?= $item === $pendaftar['keterangan_ayah'] ? 'selected' : '' ?>><?= $item ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="text-danger"><?= validation_show_error('keterangan_ayah') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_ayah">Alamat Ayah</label>
                                            <small class="text-muted">Isi dengan (-) jika sudah meninggal</small>
                                            <textarea name="alamat_ayah" class="form-control <?= validation_show_error('alamat_ayah') ? 'is-invalid' : '' ?>" id="alamat_ayah"><?= set_value('alamat_ayah', $pendaftar['alamat_ayah']) ?></textarea>
                                            <span class="text-danger"><?= validation_show_error('alamat_ayah') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ibu" role="tabpanel" aria-labelledby="ibu-tab">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" id="nama_ibu" value="<?= set_value('nama_ibu', $pendaftar['nama_ibu']) ?>" class="form-control <?= validation_show_error('nama_ibu') ? 'is-invalid' : '' ?>" name="nama_ibu">
                                            <span class="text-danger"><?= validation_show_error('nama_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                            <input type="text" id="tempat_lahir_ibu" value="<?= set_value('tempat_lahir_ibu', $pendaftar['tempat_lahir_ibu']) ?>" class="form-control <?= validation_show_error('tempat_lahir_ibu') ? 'is-invalid' : '' ?>" name="tempat_lahir_ibu">
                                            <span class="text-danger"><?= validation_show_error('tempat_lahir_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                            <input type="date" id="tanggal_lahir_ibu" value="<?= set_value('tanggal_lahir_ibu', $pendaftar['tanggal_lahir_ibu']) ?>" class="form-control <?= validation_show_error('tanggal_lahir_ibu') ? 'is-invalid' : '' ?>" placeholder="Nisn" name="tanggal_lahir_ibu">
                                            <span class="text-danger"><?= validation_show_error('tanggal_lahir_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="text" id="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu', $pendaftar['pekerjaan_ibu']) ?>" class="form-control <?= validation_show_error('pekerjaan_ibu') ? 'is-invalid' : '' ?>" name="pekerjaan_ibu">
                                            <span class="text-danger"><?= validation_show_error('pekerjaan_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                            <select id="penghasilan_ibu" class="form-select <?= validation_show_error('penghasilan_ibu') ? 'is-invalid' : '' ?>" name="penghasilan_ibu">
                                                <option value=""></option>
                                                <?php foreach ($penghasilan as $item) : ?>
                                                    <option value="<?= $item ?>" <?= $item === $pendaftar['penghasilan_ibu'] ? 'selected' : '' ?>><?= $item ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="text-danger"><?= validation_show_error('penghasilan_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keterangan_ibu">Keterangan</label>
                                            <select id="keterangan_ibu" class="form-select <?= validation_show_error('keterangan_ibu') ? 'is-invalid' : '' ?>" name="keterangan_ibu">
                                                <option value=""></option>
                                                <?php foreach ($keterangan as $item) : ?>
                                                    <option value="<?= $item ?>" <?= $item === $pendaftar['keterangan_ibu'] ? 'selected' : '' ?>><?= $item ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="text-danger"><?= validation_show_error('keterangan_ibu') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_ibu">Alamat Ibu</label>
                                            <small class="text-muted">Isi dengan (-) jika sudah meninggal</small>
                                            <textarea name="alamat_ibu" class="form-control <?= validation_show_error('alamat_ibu') ? 'is-invalid' : '' ?>" id="alamat_ibu"><?= set_value('alamat_ibu', $pendaftar['alamat_ibu']) ?></textarea>
                                            <span class="text-danger"><?= validation_show_error('alamat_ibu') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="wali-tab">
                                <div class="row">
                                    <h6 class="text-muted">*Data Wali Optional Untuk di isi</h6>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_wali">Nama Wali</label>
                                            <input type="text" id="nama_wali" value="<?= set_value('nama_wali', $pendaftar['nama_wali']) ?>" class="form-control <?= validation_show_error('nama_wali') ? 'is-invalid' : '' ?>" name="nama_wali">
                                            <span class="text-danger"><?= validation_show_error('nama_wali') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_wali">Tempat Lahir Wali</label>
                                            <input type="text" id="tempat_lahir_wali" value="<?= set_value('tempat_lahir_wali', $pendaftar['tempat_lahir_wali']) ?>" class="form-control <?= validation_show_error('tempat_lahir_wali') ? 'is-invalid' : '' ?>" name="tempat_lahir_wali">
                                            <span class="text-danger"><?= validation_show_error('tempat_lahir_wali') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_wali">Tanggal Lahir Wali</label>
                                            <input type="date" id="tanggal_lahir_wali" value="<?= set_value('tanggal_lahir_wali', $pendaftar['tanggal_lahir_wali']) ?>" class="form-control <?= validation_show_error('tanggal_lahir_wali') ? 'is-invalid' : '' ?>" placeholder="Nisn" name="tanggal_lahir_wali">
                                            <span class="text-danger"><?= validation_show_error('tanggal_lahir_wali') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                            <input type="text" id="pekerjaan_wali" value="<?= set_value('pekerjaan_ibu', $pendaftar['pekerjaan_wali']) ?>" class="form-control <?= validation_show_error('pekerjaan_wali') ? 'is-invalid' : '' ?>" name="pekerjaan_wali">
                                            <span class="text-danger"><?= validation_show_error('pekerjaan_wali') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_wali">Penghasilan Wali</label>
                                            <select id="penghasilan_wali" class="form-select <?= validation_show_error('penghasilan_wali') ? 'is-invalid' : '' ?>" name="penghasilan_wali">
                                                <option value=""></option>
                                                <?php foreach ($penghasilan as $item) : ?>
                                                    <option value="<?= $item ?>" <?= $item === $pendaftar['penghasilan_wali'] ? 'selected' : '' ?>><?= $item ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="text-danger"><?= validation_show_error('penghasilan_wali') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_wali">Alamat Wali</label>
                                            <textarea name="alamat_wali" class="form-control <?= validation_show_error('alamat_wali') ? 'is-invalid' : '' ?>" id="alamat_wali"><?= set_value('alamat_wali', $pendaftar['alamat_wali']) ?></textarea>
                                            <span class="text-danger"><?= validation_show_error('alamat_wali') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <button type="submit" class="btn btn-primary mb-1">Simpan</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="file-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="position-absolute" style="top: 5px; right: 10px">
        <button type="button" class="close bg-transparent border-0 text-white rounded-pill" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x" style="width: 30px; height: 30px;"></i>
        </button>
    </div>
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <iframe class="show-file-modal" width="100%" type="application/pdf" style="height: 90vh">
            </iframe>
        </div>
    </div>
</div>

<script>
    const allBtnModal = document.querySelectorAll('.btn-modal');
    const fileModal = document.querySelector('.show-file-modal');
    allBtnModal.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const url = btn.getAttribute('data-url');
            fileModal.setAttribute('src', url);
        });
    });
</script>
<?= $this->endSection() ?>