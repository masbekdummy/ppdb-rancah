<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - SMPN 4 Rancah</title>
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/all.min.css') ?>">
    <style>
        #hero-section {
            height: 80vh;
            background-image: url(<?= base_url('images/hero.jpg') ?>);
            background-size: cover;
            background-position: center;
            position: relative;
        }

        #hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, .4);
        }

        .content-section p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        .feature-box {
            display: flex;
            align-items: center;
            margin-top: 25px;
            animation: fadeInLeft 2s;
            border: 1px solid rgba(13, 110, 253, 0.3);
            border-radius: 6px;
            padding: 16px;
            transition: 0.5s;
        }
        .feature-box i {
            font-size: 2.5rem;
            margin-right: 20px;
        }
        .feature-box h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .feature-box p {
            margin: 0;
        }
        .feature-box:hover {
            border-color: transparent;
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="<?= base_url('images/logo.png') ?>" width="50" alt="Logo"></a>
            <a class="nav-link active" aria-current="page" href="<?= base_url('') ?>">PPDB SMP NEGERI 4 RANCAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto  align-items-center">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('') ?>">HOME</a>
                    <a class="nav-link" aria-current="page" href="<?= base_url('/login'); ?>">LOGIN</a>
                    <a class="nav-link" aria-current="page" href="<?= base_url('/admin/login'); ?>">ADMIN</a>
                    <a class="nav-link" aria-current="page" href="<?= base_url('/daftar'); ?>"><span class="btn btn-primary">DAFTAR PPDB</span></a>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero-section">
        <div class="position-absolute top-0 bottom-0 left-0 right-0 w-100 d-flex align-items-center" style="z-index: 1;">
            <div class="container text-white">
                <h1 class="animate__animated animate__fadeIn">SMPN 4 RANCAH</h1>
                <p class="col-md-5">Selamat Datang di Penerimaan Peserta Didik Baru SMP Negeri 4 Rancah, klik daftar sekarang untuk melakukan pendaftaran</p>
                <a href="<?= base_url('daftar') ?>" class="btn btn-primary">Daftar Sekarang <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <div class="content-section mt-3">
        <div class="container">
            <h2 class="animate__animated animate__fadeIn text-center">TENTANG SEKOLAH KAMI</h2>
            <p class="animate__animated animate__fadeIn text-center">SMPN 4 Rancah merupakan sekolah menengah pertama negeri yang berdiri sejak 14 Juli 1981. Sekolah ini memiliki luas tanah seluas 5.247 meter persegi, memberikan ruang yang cukup bagi kegiatan belajar mengajar dan aktivitas ekstrakurikuler</p>

            <h2 class="animate__animated animate__fadeIn text-center">KEUNGGULAN SEKOLAH</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-school"></i>
                        <div>
                            <h4>Fasilitas Modern</h4>
                            <p>Kami memiliki fasilitas yang lengkap dan modern, termasuk laboratorium sains, perpustakaan yang kaya akan koleksi buku, dan fasilitas olahraga yang luas.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>
                            <h4>Tenaga Pengajar Profesional</h4>
                            <p>Guru-guru kami adalah tenaga profesional yang berdedikasi untuk memberikan pendidikan terbaik kepada siswa-siswi kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-book-open"></i>
                        <div>
                            <h4>Kurikulum Berbasis Kompetensi</h4>
                            <p>Kurikulum kami dirancang untuk mengembangkan berbagai keterampilan penting yang dibutuhkan dalam dunia yang terus berkembang.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-futbol"></i>
                        <div>
                            <h4>Kegiatan Ekstrakurikuler</h4>
                            <p>Terdapat berbagai kegiatan ekstrakurikuler yang mendukung pengembangan bakat dan minat siswa di berbagai bidang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 border-top">
        <div class="container py-4">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <h5>Alamat</h5>
                    <p>Jl. Desa Cisontrol No. 64, CISONTROL, Kec. Rancah, Kab. Ciamis, Jawa Barat</p>
                </div>
                <div class="col-md-4">
                    <h5>Email</h5>
                    <ul class="list-unstyled">
                        <li><a href="smp4rancah@yahoo.co.id" class="text-dark">smp4rancah@yahoo.co.id</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-dark text-light text-center py-2">
            &copy; 2024 SMPN 4 Rancah.
        </div>
    </footer>

    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>