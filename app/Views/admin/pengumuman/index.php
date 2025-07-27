<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Pengumuman <?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h3>Pengumuman</h3>
    <div class="card">
        <div class="card-body">
            <button data-bs-target="#tambah-modal" data-bs-toggle="modal" class="btn btn-primary"><i
                        data-feather="plus-circle"
                        class="me-1"></i> Tambah
                Pengumuman
            </button>
            <table class='table table-striped' id="table1">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Pengumuman</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($pengumuman as $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $item['judul_pengumuman'] ?>    </td>
                        <td><?= $item['isi_pengumuman'] ?></td>
                        <td>
                            <button title="edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-modal<?= $item['pengumuman_id']; ?>"
                                    class="btn btn-primary px-2 py-1 btn-edit">
                                <i data-feather="edit" style="width: 13px; height: 13px;"></i>
                            </button>
                            <a href="<?= base_url('pengumuman/delete/' . $item['pengumuman_id']) ?>"
                               class="btn btn-danger px-2 py-1 hapus-ppdb">
                                <i data-feather="trash" style="width: 13px; height: 13px;"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambah Modal -->
    <div class="modal fade text-left" id="tambah-modal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pengumuman</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pengumuman') ?>" method="post" class="form form-edit-ppdb"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="judul_pengumuman">Judul Pengumuman</label>
                                    <input type="text" id="judul_pengumuman"
                                           required
                                           class="form-control <?= validation_show_error('judul_pengumuman') ? 'is-invalid' : '' ?>"
                                           name="judul_pengumuman">
                                    <span class="text-danger"><?= validation_show_error('judul_pengumuman') ?></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="isi_pengumuman">Isi Pengumuman</label>
                                    <textarea type="text" id="isi_pengumuman"
                                              required
                                              rows="5"
                                              class="form-control <?= validation_show_error('isi_pengumuman') ? 'is-invalid' : '' ?>"
                                              name="isi_pengumuman"></textarea>
                                    <span class="text-danger"><?= validation_show_error('isi_pengumuman') ?></span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <button type="submit" class="btn btn-primary mb-1">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php foreach ($pengumuman as $item): ?>
    <div class="modal fade text-left" id="edit-modal<?= $item['pengumuman_id']; ?>" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pengumuman</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pengumuman/update/' . $item['pengumuman_id']) ?>" method="post"
                          class="form form-edit-ppdb"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="judul_pengumuman">Judul Pengumuman</label>
                                    <input type="text" id="judul_pengumuman"
                                           required
                                           value="<?= $item['judul_pengumuman'] ?>"
                                           class="form-control <?= validation_show_error('judul_pengumuman') ? 'is-invalid' : '' ?>"
                                           name="judul_pengumuman">
                                    <span class="text-danger"><?= validation_show_error('judul_pengumuman') ?></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="isi_pengumuman">Isi Pengumuman</label>
                                    <textarea type="text" id="isi_pengumuman"
                                              required
                                              rows="5"
                                              class="form-control <?= validation_show_error('isi_pengumuman') ? 'is-invalid' : '' ?>"
                                              name="isi_pengumuman"><?= $item['isi_pengumuman'] ?></textarea>
                                    <span class="text-danger"><?= validation_show_error('isi_pengumuman') ?></span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <button type="submit" class="btn btn-primary mb-1">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection('') ?>