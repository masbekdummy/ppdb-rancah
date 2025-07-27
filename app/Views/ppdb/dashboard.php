<?= $this->extend('layout') ?>

<?= $this->section('title') ?> Dashboard - PPDB <?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
$statusPendaftaran = [
    'Belum Lengkap' => [
        'color' => 'warning',
        'message' => 'Data anda belum lengkap!, mohon segera lengkapi data agar data bisa diproses'
    ],
    'Diproses' => [
        'color' => 'secondary',
        'message' => 'Data anda sedang diproses, tunggu untuk update selanjutnya'
    ],
    'Lulus' => [
        'color' => 'primary',
        'message' => 'Selamat! anda berhasil lulus proses pendaftaran'
    ],
    'Gagal' => [
        'color' => 'danger',
        'message' => 'Mohon maaf anda tidak berhasil lulus pendaftaran'
    ]
];
?>
<h3>Dashboard</h3>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header border-bottom">
                <h4>Kelengkapan Data</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="progress progress-primary mb-2">
                        <div class="progress-bar" role="progressbar" style="width: <?= $percentComplete ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="text-primary"><?= $percentComplete ?>%</h5>
                    <a href="<?= base_url('formulir') ?>" class="btn btn-primary"><?= $pendaftar['status'] === 'Belum Lengkap' ? 'Lengkapi' : 'Lihat' ?> Formulir <i data-feather="arrow-right" width="10"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header border-bottom">
                <h4>Status Pendaftaran</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <span class="badge mb-3 bg-<?= $statusPendaftaran[$pendaftar['status']]['color']; ?>"><?= $pendaftar['status'] ?></span>
                    <span class="d-block"><?= $statusPendaftaran[$pendaftar['status']]['message']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>