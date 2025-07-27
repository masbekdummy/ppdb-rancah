<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login PPDB</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 10px;
            border-radius: 15px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #343a40;
            color: white;
            text-align: center;
        }

        .card-body {
            padding: 30px;
        }

        #loginForm input {
            border-radius: 5px;
        }

        #loginForm button {
            border-radius: 5px;
        }

        .btn-link {
            color: #343a40;
        }
    </style>
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="d-flex justify-content-center" style="margin-top: 50px;">
                        <a href="<?= base_url() ?>" class="btn btn-link">&larr; Kembali Ke Home</a>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title">Login PPDB</h5>
                        </div>
                        <div class="card-body">
                            <?php if (session()->getFlashdata('berhasil')) : ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('berhasil') ?> <strong>Harap riset password setelah berhasil login</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="text-center mb-4">
                                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" height="100">
                                <h6>Masukan NISN dan password untuk login</h6>
                            </div>
                            <form action="<?= base_url('login') ?>" method="POST" novalidate>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" required class="form-control <?= validation_show_error('nisn') ? 'is-invalid' : '' ?>" value="<?= set_value('nisn') ?>" id="nisn" name="nisn" placeholder="Masukan Nisn">
                                    <span class="text-danger">
                                        <?= validation_show_error('nisn') ?>
                                        <?= session()->getFlashdata('gagal') ?>
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input required type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                                    <span class="text-danger"><?= validation_show_error('password') ?></span>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a href="<?= base_url('daftar') ?>" class="btn btn-link">Belum Daftar?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>