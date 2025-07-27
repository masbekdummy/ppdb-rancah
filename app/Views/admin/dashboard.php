<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Dashboard - Admin <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Total Pendaftar
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalPendaftar ?></h3>
                <i data-feather="users" class="text-success" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Belum Lengkap
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalBelumLengkap ?></h3>
                <i data-feather="clipboard" class="text-warning" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Diproses
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalDiproses ?></h3>
                <i data-feather="rotate-cw" class="text-secondary" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Lulus
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalLulus ?></h3>
                <i data-feather="check-circle" class="text-primary" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Gagal
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalGagal ?></h3>
                <i data-feather="x-circle" class="text-danger" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Ditolak
                </h4>
            </div>
            <div class="card-body d-flex justify-content-between">
                <h3 class="text-primary"><?= $totalDitolak ?></h3>
                <i data-feather="x-octagon" class="text-danger" style="width: 50px; height: 50px;"></i>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('') ?>