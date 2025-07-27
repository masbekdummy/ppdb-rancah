<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>

    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/vendors/simple-datatables/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/voler/assets/css/app.css') ?>">
    <style>
        .sidebar-wrapper .sidebar-header img {
            height: 4rem;
        }

        .sidebar-wrapper .menu {
            margin-top: 0;
        }

        .table-detail td {
            padding: .5rem .5rem;
        }

        .table-detail {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header text-center" style="padding: 10px 32px;">
                    <img src="<?= base_url('images/logo.png') ?>" alt="Logo">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Menu</li>
                        <?php $dashboardUrl = session('level') == 'ppdb' ? 'ppdb-dashboard' : 'admin-dashboard'; ?>
                        <li class="sidebar-item <?= url_is($dashboardUrl) ? 'active' : ''; ?>">
                            <a href="<?= base_url($dashboardUrl) ?>" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <?php if (session('level') === 'ppdb') : ?>
                            <li class="sidebar-item <?= url_is('formulir') ? 'active' : '' ?>">
                                <a href="<?= base_url('formulir') ?>" class='sidebar-link'>
                                    <i data-feather="book" width="20"></i>
                                    <span>Formulir Pendaftaran</span>
                                </a>
                            </li>

                            <li class="sidebar-item <?= url_is('change-password') ? 'active' : '' ?>">
                                <a href="<?= base_url('change-password') ?>" class='sidebar-link'>
                                    <i data-feather="key" width="20"></i>
                                    <span>Ubah Password</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (session('level') == 'admin') : ?>
                            <?php $allStatus = ['Belum Lengkap', 'Diproses', 'Lulus', 'Gagal', 'Ditolak'] ?>
                            <li class="sidebar-item <?= url_is('manajemen-ppdb') ? 'active' : '' ?>  has-sub">
                                <a href="#" class="sidebar-link">
                                    <i data-feather="clipboard"></i>
                                    <span>PPDB</span>
                                </a>
                                <ul class="submenu <?= url_is('manajemen-ppdb') ? 'active' : '' ?>">
                                    <li>
                                        <a href="<?= base_url('manajemen-ppdb') ?>">Semua Pendaftar</a>
                                    </li>
                                    <?php foreach ($allStatus as $status) : ?>
                                        <li>
                                            <a href="<?= base_url('manajemen-ppdb') ?>?filter=<?= $status ?>"><?= $status ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if (session('level') == 'admin') : ?>
                            <li class="sidebar-item <?= url_is('pengumuman') ? 'active' : '' ?>">
                                <a href="<?= base_url('pengumuman') ?>" class='sidebar-link'>
                                    <i data-feather="message-square" width="20"></i>
                                    <span>Pengumuman</span>
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="sidebar-item <?= url_is('pengumuman-ppdb') ? 'active' : '' ?>">
                                <a href="<?= base_url('pengumuman-ppdb') ?>" class='sidebar-link'>
                                    <i data-feather="message-square" width="20"></i>
                                    <span>Pengumuman</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="sidebar-item">
                            <a href="<?= base_url('logout') ?>" class='sidebar-link'>
                                <i data-feather="log-out" width="20"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <?php if (session('level') === 'ppdb') : ?>
                                        <img src="<?= base_url($pendaftar['foto_siswa'] ? 'foto-siswa/' . $pendaftar['foto_siswa'] : 'images/profile.jpg') ?>" alt="" srcset="">
                                    <?php else : ?>
                                        <img src="<?= base_url('images/profile.jpg') ?>" alt="" srcset="">
                                    <?php endif; ?>
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block"><?= session('level') === 'ppdb' ? $pendaftar['nama_lengkap'] : $admin['nama'] ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= base_url('logout') ?>"><i data-feather="log-out"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <?php if (session()->getFlashdata('login-berhasil')) : ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('login-berhasil') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('vendor/voler/assets/js/feather-icons/feather.min.js') ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/js/app.js') ?>"></script>

    <script src="<?= base_url('vendor/voler/assets/vendors/chartjs/Chart.min.js') ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/vendors/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/js/pages/dashboard.js') ?>"></script>

    <script src="<?= base_url('vendor/voler/assets/js/main.js') ?>"></script>

    <script src="<?= base_url('vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "<?= session()->getFlashdata('success'); ?>",
                icon: "success"
            });
        </script>
    <?php endif; ?>
    <script src="<?= base_url('vendor/voler/assets/vendors/simple-datatables/simple-datatables.js') ?>"></script>
    <script src="<?= base_url('vendor/voler/assets/js/vendors.js') ?>"></script>

    <script>
        const allHapusBtn = document.querySelectorAll('.hapus-ppdb');
        allHapusBtn.forEach(function(hapusBtn) {
            hapusBtn.addEventListener('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Yakin?",
                    text: "Apakah anda yakin ingin menghapus data?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = hapusBtn.href;
                    }
                });
            });
        });

        const buttonNonCompleted = document.querySelector('.btn-non-completed');
        buttonNonCompleted.addEventListener('click', function() {
            Swal.fire({
                title: "Gagal Cetak",
                text: "Lengkapi data sampai 100% untuk cetak formulir",
                icon: "error"
            });
        })
    </script>

    <script>
        const allBtnEdit = document.querySelectorAll('.btn-edit');
        const formEditPpdb = document.querySelector('.form-edit-ppdb');
        const urlEdit = "<?= base_url('manajemen-ppdb/' . '') ?>";
        const baseUrl = "<?= base_url() ?>";
        allBtnEdit.forEach(function(btnEdit) {
            btnEdit.addEventListener('click', function(e) {
                const pendaftar = JSON.parse(btnEdit.getAttribute('data-bs-pendaftar'));
                formEditPpdb.action = urlEdit + pendaftar.ppdb_id;
                for (const key in pendaftar) {
                    if (document.querySelector('[name="' + key + '"]')) {
                        if (document.querySelector('[name="' + key + '"]').type !== 'file') {
                            document.querySelector('[name="' + key + '"]').value = pendaftar[key];
                        } else {
                            if (key == 'foto_siswa') {
                                document.querySelector('.foto-siswa').src = baseUrl + 'foto-siswa/' + pendaftar[key];
                            } else {
                                const element = document.querySelector('.' + key);
                                if (pendaftar[key]) {
                                    element.classList.remove('d-none');
                                    element.querySelector('button').setAttribute('data-url', baseUrl + key.replaceAll('_', '-') + '/' + pendaftar[key]);
                                } else {
                                    element.classList.add('d-none');
                                }
                            }
                        }
                    }
                }
            });
        })
    </script>
</body>

</html>