<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/css/app.css') ?>">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" height="100">
                                <h3>Login</h3>
                                <p>Masukan username dan password untuk login.</p>
                            </div>
                            <form action="<?= base_url('admin/login') ?>" method="post">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="username" required value="<?= set_value('username') ?>" id="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                    <span class="text-danger mt-1">
                                        <?= validation_show_error('nisn') ?>
                                        <?= session()->getFlashdata('gagal') ?>
                                    </span>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="password" id="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4 ps-0'>
                                    <div class="float-start">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="float-end mt-2">
                                        <a href="<?= base_url() ?>">Kembali Ke Home</a>
                                    </div>
                                </div>
                            </form>
                            <div class="divider"></div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?= base_url('vendor/voler/assets/js/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/js/app.js'); ?>"></script>

    <script src="<?= base_url('vendor/voler/assets/js/main.js'); ?>"></script>
</body>

</html>