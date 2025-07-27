<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Pengumuman <?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php foreach ($pengumuman as $item): ?>
    <div class="card">
        <div class="card-header border-bottom">
            <h4><?= $item['judul_pengumuman'] ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= $item['isi_pengumuman'] ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php if(empty($pengumuman)): ?>
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Belum Ada Pengumuman</h4>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection('') ?>