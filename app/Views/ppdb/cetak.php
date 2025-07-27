<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .table-detail {
            width: 100%;
        }

        .table-detail {
            padding: 10px 12px;
        }

        .table-detail td {
            padding: .3rem;
        }
        td{
            font-size: 13px;
        }

        .d-none {
            display: none;
        }

        .img {
            display: block;
            border: 0px solid black;
        }
        h5 {
            font-size: 1rem;
        }
    </style>
</head>

<body>
<table style="width: 90%; margin: auto">
    <tr>
        <td style="width: 15%;"><img src="images/logo.png" style="width: 100%;" alt=""></td>
        <td style="text-align: center;">
            <h2>FORMULIR PENERIMAAN PESERTA DIDIK BARU</h2>
            <H2>SMP NEGERI 4 RANCAH TAHUN AJARAN 2025/2026</H2>
            <h5>Jl. Desa Cisontrol No. 64, CISONTROL, Kec. Rancah, Kab. Ciamis</h5>
        </td>
        <td style="width: 15%;"></td>
    </tr>
</table>
<hr style="margin: 10px 0;">
<?php $jenisKelamin = [
    'L' => 'Laki-Laki',
    'P' => 'Perempuan'
]; ?>
<h5 style="padding-left: 1rem">Calon Peserta Didik : </h5>
<table class="table-detail">
    <tr>
        <td>NISN</td>
        <td><span class="me-2">:</span> <?= $pendaftar['nisn'] ?></td>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?= $pendaftar['nama_lengkap'] ?></td>
    </tr>
    <tr>
        <td>Nama Panggilan</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['nama_panggilan'] ? $pendaftar['nama_panggilan'] : '-'; ?>
        </td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= $pendaftar['jenis_kelamin'] ? $jenisKelamin[$pendaftar['jenis_kelamin']] : '-' ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['tanggal_lahir'] ? $pendaftar['tanggal_lahir'] : '-'; ?>
        </td>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?= $pendaftar['tempat_lahir'] ? $pendaftar['tempat_lahir'] : '-'; ?></td>
    </tr>
    <tr>
        <td>No HP</td>
        <td><span class="me-2">:</span> <?= $pendaftar['no_telp'] ? $pendaftar['no_telp'] : '-'; ?>
        </td>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td><?= $pendaftar['asal_sekolah'] ? $pendaftar['asal_sekolah'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['kewarganegaraan'] ? $pendaftar['kewarganegaraan'] : '-'; ?>
        </td>
        <td>Agama</td>
        <td>:</td>
        <td><?= $pendaftar['agama'] ? $pendaftar['agama'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Jarak Tempuh</td>
        <td><span class="me-2">:</span> <?= $pendaftar['jarak_tempuh'] ? $pendaftar['jarak_tempuh'] : '-'; ?>
        </td>
        <td>Jumlah Saudara</td>
        <td>:</td>
        <td><?= $pendaftar['jumlah_saudara'] ? $pendaftar['jumlah_saudara'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Anak Ke</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['anak_ke'] ? $pendaftar['anak_ke'] : '-'; ?>
        </td>
        <td>Alamat</td>
        <td>:</td>
        <td><?= $pendaftar['alamat'] ? $pendaftar['alamat'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><span class="me-2">:</span> <?= $pendaftar['status'] ? $pendaftar['status'] : '-'; ?></td>
        <td>Foto Siswa</td>
        <td>:</td>
        <td>
            <img src="<?='foto-siswa/' . $pendaftar['foto_siswa'] ?>"
                 class="<?= $pendaftar['foto_siswa'] ? '' : 'd-none' ?> shadow rounded" width="150"
                 alt="Foto Siswa">
            <?= $pendaftar['foto_siswa'] ? '' : '-' ?>
        </td>
    </tr>
</table>

<h5 class="mt-2" style="padding-left: 1rem">Data Ayah : </h5>
<table class="table-detail">
    <tr>
        <td>Nama Ayah</td>
        <td><span class="me-2">:</span> <?= $pendaftar['nama_ayah'] ?></td>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?= $pendaftar['tempat_lahir_ayah'] ? $pendaftar['tempat_lahir_ayah'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['tanggal_lahir_ayah'] ? $pendaftar['tanggal_lahir_ayah'] : '-'; ?>
        </td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?= $pendaftar['pekerjaan_ayah'] ? $pendaftar['pekerjaan_ayah'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['keterangan_ayah'] ? $pendaftar['keterangan_ayah'] : '-'; ?>
        </td>
        <td>Alamat</td>
        <td>:</td>
        <td><?= $pendaftar['alamat_ayah'] ? $pendaftar['alamat_ayah'] : '-'; ?></td>
    </tr>
    <tr>
        <td colspan="5"><h5 class="my-1" style="margin-left: -.3rem">Data Ibu : </h5></td>
    </tr>
    <tr>
        <td>Nama Ibu</td>
        <td><span class="me-2">:</span> <?= $pendaftar['nama_ibu'] ? $pendaftar['nama_ibu'] : '-'; ?></td>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?= $pendaftar['tempat_lahir_ibu'] ? $pendaftar['tempat_lahir_ibu'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['tanggal_lahir_ibu'] ? $pendaftar['tanggal_lahir_ibu'] : '-'; ?>
        </td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?= $pendaftar['pekerjaan_ibu'] ? $pendaftar['pekerjaan_ibu'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['keterangan_ibu'] ? $pendaftar['keterangan_ibu'] : '-'; ?>
        </td>
        <td>Alamat</td>
        <td>:</td>
        <td><?= $pendaftar['alamat_ibu'] ? $pendaftar['alamat_ibu'] : '-'; ?></td>
    </tr>
    <tr>
        <td colspan="5"><h5 class="my-1" style="margin-left: -.3rem">Data Wali : </h5></td>
    </tr>
    <tr>
        <td>Nama Wali</td>
        <td><span class="me-2">:</span> <?= $pendaftar['nama_wali'] ? $pendaftar['nama_wali'] : '-'; ?></td>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?= $pendaftar['tempat_lahir_wali'] ? $pendaftar['tempat_lahir_wali'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <span class="me-2">:</span> <?= $pendaftar['tanggal_lahir_wali'] ? $pendaftar['tanggal_lahir_wali'] : '-'; ?>
        </td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?= $pendaftar['pekerjaan_wali'] ? $pendaftar['pekerjaan_wali'] : '-'; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><span class="me-2">:</span> <?= $pendaftar['alamat_wali'] ? $pendaftar['alamat_wali'] : '-'; ?>
        </td>
    </tr>
</table>
</body>

</html>