<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .table-content {
            width: 100%;
            border-collapse: collapse;
        }

        .table-content, .table-content tr, .table-content td, .table-content th {
            border: 1px solid black;
        }

        .table-content {
            padding: 10px 15px;
        }

        .table-content td {
            padding: .5rem;
        }

        td{
            font-size: 14px;
        }


        .d-none {
            display: none;
        }

        .img {
            display: block;
            border: 1px solid black;
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
            <h2 style="text-transform: uppercase">DAFTAR PESERTA <?= $status ? $status : 'SEMUA'?> PPDB</h2>
            <H2>SMP NEGERI 4 RANCAH</H2>
        </td>
        <td style="width: 15%;"></td>
    </tr>
</table>
<hr style="margin: 10px 0;">
<?php $jenisKelamin = [
    'L' => 'Laki-Laki',
    'P' => 'Perempuan'
]; ?>
<?php $agama = [
    'Islam' => 'Islam',
    'Kristen' => 'Kristen'
]; ?>
<table class="table-content">
    <thead>
    <tr>
        <th>No</th>
        <th>Nisn</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Status Pendaftaran</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach($ppdb as $item): ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $item['nisn'];?></td>
            <td><?= $item['nama_lengkap'];?></td>
            <td><?= $item['jenis_kelamin'] ? $jenisKelamin[$item['jenis_kelamin']]:'-';?></td>
            <td><?= $item['no_telp'];?></td>
            <td><?= $item['status'];?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>