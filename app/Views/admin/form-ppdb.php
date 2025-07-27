<?php
$penghasilan = [
    '< Rp. 1 Juta',
    'Rp. 1 Juta - Rp. 2 Juta',
    'Rp. 2 Juta - Rp. 3 Juta',
    '> Rp. 3 Juta',
];

$keterangan = [
    'Masih Hidup',
    'Meninggal'
];

$statusPendaftaran = [
    'Belum Lengkap' => 'warning',
    'Diproses' => 'secondary',
    'Lulus' => 'primary',
    'Gagal' => 'danger',
];
?>
<div class="my-2">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswa"
               role="tab" aria-controls="siswa"
               aria-selected="true">Data Siswa</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#ayah"
               role="tab" aria-controls="ayah"
               aria-selected="false">Data Ayah</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ibu" role="tab"
               aria-controls="ibu"
               aria-selected="false">Data Ibu</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#wali"
               role="tab" aria-controls="wali"
               aria-selected="false">Data Wali</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="siswa" role="tabpanel"
         aria-labelledby="siswa-tab">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nisn">Nisn</label>
                    <input type="number" id="nisn"
                           class="form-control"
                           placeholder="Nisn" name="nisn">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap"
                           class="form-control"
                           placeholder="Nama Lengkap" name="nama_lengkap">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" id="nama_panggilan"
                           class="form-control"
                           name="nama_panggilan">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin"
                            class="form-select"
                            name="jenis_kelamin">
                        <option value=""></option>
                        <option value="L">
                            Laki-Laki
                        </option>
                        <option value="P">
                            Perempuan
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir"
                           class="form-control"
                           name="tanggal_lahir">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir"
                           class="form-control"
                           name="tempat_lahir">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" id="asal_sekolah"
                           class="form-control"
                           name="asal_sekolah">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="no_telp">No HP/WA</label>
                    <input type="number" id="no_telp"
                           class="form-control"
                           name="no_telp">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan"
                            class="form-select"
                            name="kewarganegaraan">
                        <option value=""></option>
                        <option value="WNI">
                            WNI
                        </option>
                        <option value="WNA">
                            WNA
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select id="agama"
                            class="form-select"
                            name="agama">
                        <option value=""></option>
                        <option value="Islam">
                            Islam
                        </option>
                        <option value="Kristen">
                            Kristen
                        </option>
                        <option value="Katolik">
                            Katolik
                        </option>
                        <option value="Hindu">
                            Hindu
                        </option>
                        <option value="Budha">
                            Budha
                        </option>
                        <option value="Khonghucu">
                            Khonghucu
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="jarak_tempuh">Jarak Tempuh Ke Sekolah</label>
                    <input type="text" id="jarak_tempuh"
                           class="form-control"
                           name="jarak_tempuh">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="jumlah_saudara">Jumlah Saudara</label>
                    <input type="number" id="jumlah_saudara"
                           class="form-control"
                           name="jumlah_saudara">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="anak_ke">Anak Ke</label>
                    <input type="number" id="anak_ke"
                           class="form-control"
                           name="anak_ke">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="almat">Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              id="alamat"></textarea>
                </div>
            </div>
            <div class="col-12">
        <div class="mb-3">
            <label for="jalur_pendaftaran" class="form-label">Jalur Pendaftaran</label>
            <select name="jalur_pendaftaran" id="jalur_pendaftaran" class="form-select">
                <option value="" hidden>-- Pilih Jalur Pendaftaran --</option>
                <option value="Afirmasi">Afirmasi</option>
                <option value="Prestasi">Prestasi</option>
                <option value="Mutasi">Mutasi</option>
            </select>
        </div>
    </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="foto_siswa">Foto Siswa (potrait)</label>
                    <img src=""
                         style="max-height: 300px; max-width: 100%; object-fit: cover; object-position: center"
                         class="d-block rounded shadow mb-2 foto-siswa" alt="Gambar Siswa">
                    <input type="file" id="foto_siswa"
                           class="form-control"
                           name="foto_siswa" accept="image/*">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="file_ijazah">File Ijazah (PDF)</label>
                    <div class="my-2 file_ijazah">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> File-Ijazah.pdf
                        </button>
                    </div>
                    <input type="file" id="file_ijazah"
                           class="form-control"
                           name="file_ijazah" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="file_rapot">File Rapot (PDF)</label>
                    <div class="my-2 file_rapot">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> File-rapot.pdf
                        </button>
                    </div>
                    <input type="file" id="file_rapot"
                           class="form-control"
                           name="file_rapot" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="ktp_orang_tua">KTP Orang Tua (PDF)</label>
                    <div class="my-2 ktp_orang_tua">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> KTP Orang Tua.pdf
                        </button>
                    </div>
                    <input type="file" id="ktp_orang_tua"
                           class="form-control"
                           name="ktp_orang_tua" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="akta_kelahiran">Akta Kelahiran (PDF)</label>
                    <div class="my-2 akta_kelahiran">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> Akta Kelahiran.pdf
                        </button>
                    </div>
                    <input type="file" id="akta_kelahiran"
                           class="form-control"
                           name="akta_kelahiran" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="surat_pernyataan">Surat Pernyataan (PDF) (<a href="<?= base_url('template-surat'); ?>"
                                                                             class="text-primary">Unduh Template Surat
                            Pernyataan</a>)</label>
                    <div class="my-2 surat_pernyataan">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> Surat Pernyataan.pdf
                        </button>
                    </div>
                    <input type="file" id="surat_pernyataan"
                           class="form-control"
                           name="surat_pernyataan" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="kartu_kesejahtraan">Kartu Kesejahtraan (PDF) Contoh: KIP, KIS, PKH, DLL</label>
                    <small class="text-muted">(Optional)</small>
                    <div class="my-2 kartu_kesejahtraan">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> Kartu Kesejahtraan.pdf
                        </button>
                    </div>
                    <input type="file" id="kartu_kesejahtraan"
                           class="form-control"
                           name="kartu_kesejahtraan" accept="application/pdf">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="sertifikat_kejuaraan">Sertifikat Kejuaraan (PDF)</label>
                    <small class="text-muted">(Optional)</small>
                    <div class="my-2 sertifikat_kejuaraan">
                        <button type="button" data-bs-toggle="modal"
                                data-bs-target="#file-modal"
                                data-url=""
                                class="btn btn-link btn-modal"><i
                                    data-feather="file-text"></i> Akta Kelahiran.pdf
                        </button>
                    </div>
                    <input type="file" id="sertifikat_kejuaraan"
                           class="form-control"
                           name="sertifikat_kejuaraan" accept="application/pdf">
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ayah" role="tabpanel" aria-labelledby="ayah-tab">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" id="nama_ayah"
                           class="form-control"
                           name="nama_ayah">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                    <input type="text" id="tempat_lahir_ayah"
                           class="form-control"
                           name="tempat_lahir_ayah">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                    <input type="date" id="tanggal_lahir_ayah"
                           class="form-control"
                           placeholder="Nisn" name="tanggal_lahir_ayah">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                    <input type="text" id="pekerjaan_ayah"
                           class="form-control"
                           name="pekerjaan_ayah">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                    <select id="penghasilan_ayah"
                            class="form-select"
                            name="penghasilan_ayah">
                        <option value=""></option>
                        <?php foreach ($penghasilan as $item): ?>
                            <option value="<?= $item ?>"><?= $item ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="keterangan_ayah">Keterangan</label>
                    <select id="keterangan_ayah"
                            class="form-select"
                            name="keterangan_ayah">
                        <option value=""></option>
                        <?php foreach ($keterangan as $item): ?>
                            <option value="<?= $item ?>"><?= $item ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="alamat_ayah">Alamat Ayah</label>
                    <small class="text-muted">Isi dengan (-) jika sudah meninggal</small>
                    <textarea name="alamat_ayah"
                              class="form-control"
                              id="alamat_ayah"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ibu" role="tabpanel" aria-labelledby="ibu-tab">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" id="nama_ibu"
                           class="form-control"
                           name="nama_ibu">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                    <input type="text" id="tempat_lahir_ibu"
                           class="form-control"
                           name="tempat_lahir_ibu">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                    <input type="date" id="tanggal_lahir_ibu"
                           class="form-control"
                           placeholder="Nisn" name="tanggal_lahir_ibu">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                    <input type="text" id="pekerjaan_ibu"
                           class="form-control"
                           name="pekerjaan_ibu">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu</label>
                    <select id="penghasilan_ibu"
                            class="form-select"
                            name="penghasilan_ibu">
                        <option value=""></option>
                        <?php foreach ($penghasilan as $item): ?>
                            <option value="<?= $item ?>"><?= $item ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="keterangan_ibu">Keterangan</label>
                    <select id="keterangan_ibu"
                            class="form-select"
                            name="keterangan_ibu">
                        <option value=""></option>
                        <?php foreach ($keterangan as $item): ?>
                            <option value="<?= $item ?>"><?= $item ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="alamat_ibu">Alamat Ibu</label>
                    <small class="text-muted">Isi dengan (-) jika sudah meninggal</small>
                    <textarea name="alamat_ibu"
                              class="form-control"
                              id="alamat_ibu"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="wali-tab">
        <div class="row">
            <h6 class="text-muted">*Data Wali Optional Untuk di isi</h6>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_wali">Nama Wali</label>
                    <input type="text" id="nama_wali"
                           class="form-control"
                           name="nama_wali">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tempat_lahir_wali">Tempat Lahir Wali</label>
                    <input type="text" id="tempat_lahir_wali"
                           class="form-control"
                           name="tempat_lahir_wali">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_lahir_wali">Tanggal Lahir Wali</label>
                    <input type="date" id="tanggal_lahir_wali"
                           class="form-control"
                           placeholder="Nisn" name="tanggal_lahir_wali">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                    <input type="text" id="pekerjaan_wali"
                           class="form-control"
                           name="pekerjaan_wali">
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="penghasilan_wali">Penghasilan Wali</label>
                    <select id="penghasilan_wali"
                            class="form-select"
                            name="penghasilan_wali">
                        <option value=""></option>
                        <?php foreach ($penghasilan as $item): ?>
                            <option value="<?= $item ?>"><?= $item ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="alamat_wali">Alamat Wali</label>
                    <textarea name="alamat_wali"
                              class="form-control"
                              id="alamat_wali"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status"
                        class="form-select <?= validation_show_error('status') ? 'is-invalid' : '' ?>"
                        name="status">
                    <?php foreach ($statusPendaftaran as $status => $_) : ?>
                        <option value="<?= $status ?>"><?= $status ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="text-danger"><?= validation_show_error('status') ?></span>
            </div>
        </div>
        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-primary mb-1">Simpan</button>
        </div>
    </div>
</div>