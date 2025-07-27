<?= $this->extend('layout') ?>

<?= $this->section('title') ?> Ubah Password - PPDB <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-7">
        <div class="card">
            <div class="card-header border-bottom">
                <h4>Ubah Password</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="<?= base_url('change-password') ?>" method="post">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input required type="password" id="password" class="form-control <?= validation_show_error('password') ? 'is-invalid' : '' ?>" name="password">
                                <span class="text-danger"><?= validation_show_error('password') ?></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="konfirmasi_password">Konfirmasi Password</label>
                                <input required type="password" id="konfirmasi_password" class="form-control <?= validation_show_error('konfirmasi_password') ? 'is-invalid' : '' ?>" name="konfirmasi_password">
                                <span class="text-danger"><?= validation_show_error('konfirmasi_password') ?></span>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-1">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>