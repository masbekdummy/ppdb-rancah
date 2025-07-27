<div class="row">
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="nisn">Nisn</label>
            <input type="number" id="nisn"
                value="<?= set_value('nisn', $pendaftar['nisn']) ?>"
                class="form-control <?= validation_show_error('nisn') ? 'is-invalid' : '' ?>"
                placeholder="Nisn" name="nisn">
            <span class="text-danger"><?= validation_show_error('nisn') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap"
                value="<?= set_value('nama_lengkap', $pendaftar['nama_lengkap']) ?>"
                class="form-control <?= validation_show_error('nama_lengkap') ? 'is-invalid' : '' ?>"
                placeholder="Nama Lengkap" name="nama_lengkap">
            <span class="text-danger"><?= validation_show_error('nama_lengkap') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="nama_panggilan">Nama Panggilan</label>
            <input type="text" id="nama_panggilan"
                value="<?= set_value('nama_panggilan', $pendaftar['nama_panggilan']) ?>"
                class="form-control <?= validation_show_error('nama_panggilan') ? 'is-invalid' : '' ?>"
                name="nama_panggilan">
            <span class="text-danger"><?= validation_show_error('nama_panggilan') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin"
                class="form-select <?= validation_show_error('jenis_kelamin') ? 'is-invalid' : '' ?>"
                name="jenis_kelamin">
                <option value="L" <?= set_value('jenis_kelamin', $pendaftar['jenis_kelamin']) == 'L' ? 'selected' : '' ?>>
                    Laki-Laki
                </option>
                <option value="P" <?= set_value('jenis_kelamin', $pendaftar['jenis_kelamin']) == 'P' ? 'selected' : '' ?>>
                    Perempuan
                </option>
            </select>
            <span class="text-danger"><?= validation_show_error('jenis_kelamin') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir"
                value="<?= set_value('tanggal_lahir', $pendaftar['tanggal_lahir']) ?>"
                class="form-control <?= validation_show_error('tanggal_lahir') ? 'is-invalid' : '' ?>"
                name="tanggal_lahir">
            <span class="text-danger"><?= validation_show_error('tanggal_lahir') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir"
                value="<?= set_value('tempat_lahir', $pendaftar['tempat_lahir']) ?>"
                class="form-control <?= validation_show_error('tempat_lahir') ? 'is-invalid' : '' ?>"
                name="tempat_lahir">
            <span class="text-danger"><?= validation_show_error('tempat_lahir') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" id="asal_sekolah"
                value="<?= set_value('asal_sekolah', $pendaftar['asal_sekolah']) ?>"
                class="form-control <?= validation_show_error('asal_sekolah') ? 'is-invalid' : '' ?>"
                name="asal_sekolah">
            <span class="text-danger"><?= validation_show_error('asal_sekolah') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="no_telp">No HP/WA</label>
            <input type="number" id="no_telp"
                value="<?= set_value('no_telp', $pendaftar['no_telp']) ?>"
                class="form-control <?= validation_show_error('no_telp') ? 'is-invalid' : '' ?>"
                name="no_telp">
            <span class="text-danger"><?= validation_show_error('no_telp') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <select id="kewarganegaraan"
                class="form-select <?= validation_show_error('kewarganegaraan') ? 'is-invalid' : '' ?>"
                name="kewarganegaraan">
                <option value="WNI" <?= set_value('kewarganegaraan', $pendaftar['kewarganegaraan']) == 'WNI' ? 'selected' : '' ?>>
                    WNI
                </option>
                <option value="WNA" <?= set_value('kewarganegaraan', $pendaftar['kewarganegaraan']) == 'WNA' ? 'selected' : '' ?>>
                    WNA
                </option>
            </select>
            <span class="text-danger"><?= validation_show_error('kewarganegaraan') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="agama">Agama</label>
            <select type="text" id="agama"
                class="form-select <?= validation_show_error('agama') ? 'is-invalid' : '' ?>"
                name="agama">
                <option value="Islam" <?= set_value('agama', $pendaftar['agama']) == 'Islam' ? 'selected' : '' ?>>
                    Islam
                </option>
                <option value="Kristen" <?= set_value('agama', $pendaftar['agama']) == 'Kristen' ? 'selected' : '' ?>>
                    Kristen
                </option>
                <option value="Katolik" <?= set_value('agama', $pendaftar['agama']) == 'Katolik' ? 'selected' : '' ?>>
                    Katolik
                </option>
                <option value="Budha" <?= set_value('agama', $pendaftar['agama']) == 'Budha' ? 'selected' : '' ?>>
                    Budha
                </option>
                <option value="Hindu" <?= set_value('agama', $pendaftar['agama']) == 'Hindu' ? 'selected' : '' ?>>
                    Hindu
                </option>
                <option value="Konghucu" <?= set_value('agama', $pendaftar['agama']) == 'Khonghucu' ? 'selected' : '' ?>>
                    Khonghucu
                </option>
            </select>
            <span class="text-danger"><?= validation_show_error('agama') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="jarak_tempuh">Jarak Tempuh Ke Sekolah</label>
            <input type="text" id="jarak_tempuh"
                value="<?= set_value('jarak_tempuh', $pendaftar['jarak_tempuh']) ?>"
                class="form-control <?= validation_show_error('jarak_tempuh') ? 'is-invalid' : '' ?>"
                name="jarak_tempuh">
            <span class="text-danger"><?= validation_show_error('jarak_tempuh') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="jumlah_saudara">Jumlah Saudara</label>
            <input type="number" id="jumlah_saudara"
                value="<?= set_value('jumlah_saudara', $pendaftar['jumlah_saudara']) ?>"
                class="form-control <?= validation_show_error('jumlah_saudara') ? 'is-invalid' : '' ?>"
                name="jumlah_saudara">
            <span class="text-danger"><?= validation_show_error('jumlah_saudara') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="anak_ke">Anak Ke</label>
            <input type="number" id="anak_ke"
                value="<?= set_value('anak_ke', $pendaftar['anak_ke']) ?>"
                class="form-control <?= validation_show_error('anak_ke') ? 'is-invalid' : '' ?>"
                name="anak_ke">
            <span class="text-danger"><?= validation_show_error('anak_ke') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat"
                class="form-control <?= validation_show_error('alamat') ? 'is-invalid' : '' ?>"
                id="alamat"><?= set_value('alamat', $pendaftar['alamat']) ?></textarea>
            <span class="text-danger"><?= validation_show_error('alamat') ?></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="jalur_pendaftaran" class="form-label">Jalur Pendaftaran</label>
            <select name="jalur_pendaftaran" id="jalur_pendaftaran" class="form-select">
                <option value="" hidden>-- Pilih Jalur Pendaftaran --</option>
                <option value="Afirmasi" <?= $pendaftar['jalur_pendaftaran'] == 'Afirmasi' ? 'selected' : '' ?>>Afirmasi</option>
                <option value="Prestasi" <?= $pendaftar['jalur_pendaftaran'] == 'Prestasi' ? 'selected' : '' ?>>Prestasi</option>
                <option value="Mutasi" <?= $pendaftar['jalur_pendaftaran'] == 'Mutasi' ? 'selected' : '' ?>>Mutasi</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label for="foto_siswa">Foto Siswa (3 x 4)</label>
            <?php if ($pendaftar['foto_siswa']): ?>
                <img src="<?= base_url('foto-siswa/' . $pendaftar['foto_siswa']) ?>"
                    style="max-height: 300px; max-width: 100%; object-fit: cover; object-position: center"
                    class="d-block rounded shadow mb-2" alt="Gambar Siswa">
            <?php endif; ?>
            <input type="file" id="foto_siswa"
                value="<?= set_value('foto_siswa', $pendaftar['foto_siswa']) ?>"
                class="form-control <?= validation_show_error('foto_siswa') ? 'is-invalid' : '' ?>"
                name="foto_siswa" accept="image/*">
            <span class="text-danger"><?= validation_show_error('foto_siswa') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="file_ijazah">File Ijazah/Surat Keterangan Lulus (PDF)</label>
            <?php if ($pendaftar['file_ijazah']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal"
                        data-url="<?= base_url('file-ijazah/' . $pendaftar['file_ijazah']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> File-Ijazah.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="file_ijazah"
                value="<?= set_value('file_ijazah', $pendaftar['file_ijazah']) ?>"
                class="form-control <?= validation_show_error('file_ijazah') ? 'is-invalid' : '' ?>"
                name="file_ijazah" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('file_ijazah') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="file_rapot">File Rapot (PDF) *7 s/d 11 </label>
            <?php if ($pendaftar['file_rapot']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('file-rapot/' . $pendaftar['file_rapot']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> File-rapot.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="file_rapot"
                value="<?= set_value('file_rapot', $pendaftar['file_rapot']) ?>"
                class="form-control <?= validation_show_error('file_rapot') ? 'is-invalid' : '' ?>"
                name="file_rapot" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('file_rapot') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="ktp_orang_tua">KTP Orang Tua (PDF)</label>
            <?php if ($pendaftar['ktp_orang_tua']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('ktp-orang-tua/' . $pendaftar['ktp_orang_tua']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> KTP Orang Tua.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="ktp_orang_tua"
                value="<?= set_value('ktp_orang_tua', $pendaftar['ktp_orang_tua']) ?>"
                class="form-control <?= validation_show_error('ktp_orang_tua') ? 'is-invalid' : '' ?>"
                name="ktp_orang_tua" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('ktp_orang_tua') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="akta_kelahiran">Akta Kelahiran (PDF)</label>
            <?php if ($pendaftar['akta_kelahiran']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('akta-kelahiran/' . $pendaftar['akta_kelahiran']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> Akta Kelahiran.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="akta_kelahiran"
                value="<?= set_value('akta_kelahiran', $pendaftar['akta_kelahiran']) ?>"
                class="form-control <?= validation_show_error('akta_kelahiran') ? 'is-invalid' : '' ?>"
                name="akta_kelahiran" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('akta_kelahiran') ?></span>
        </div>
    </div>
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label for="surat_pernyataan">Surat Pernyataan (PDF) (<a href="<?= base_url('template-surat'); ?>" class="text-primary">Unduh Template Surat Pernyataan</a>)</label>
            <?php if ($pendaftar['surat_pernyataan']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('surat-pernyataan/' . $pendaftar['surat_pernyataan']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> Surat Pernyataan.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="surat_pernyataan"
                value="<?= set_value('surat_pernyataan', $pendaftar['surat_pernyataan']) ?>"
                class="form-control <?= validation_show_error('surat_pernyataan') ? 'is-invalid' : '' ?>"
                name="surat_pernyataan" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('surat_pernyataan') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="kartu_kesejahtraan">Kartu Kesejahtraan (PDF) Contoh: KIP, KIS, PKH, DLL</label>
            <small class="text-muted">(Optional)</small>
            <?php if ($pendaftar['kartu_kesejahtraan']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('kartu-kesejahtraan/' . $pendaftar['kartu_kesejahtraan']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> Kartu Kesejahtraan.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="kartu_kesejahtraan"
                value="<?= set_value('kartu_kesejahtraan', $pendaftar['kartu_kesejahtraan']) ?>"
                class="form-control <?= validation_show_error('kartu_kesejahtraan') ? 'is-invalid' : '' ?>"
                name="kartu_kesejahtraan" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('kartu_kesejahtraan') ?></span>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="sertifikat_kejuaraan">Sertifikat Kejuaraan (PDF)</label>
            <small class="text-muted">(Optional)</small>
            <?php if ($pendaftar['sertifikat_kejuaraan']): ?>
                <div class="my-2">
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#file-modal" data-url="<?= base_url('sertifikat-kejuaraan/' . $pendaftar['sertifikat_kejuaraan']) ?>" class="btn btn-link btn-modal"><i
                            data-feather="file-text"></i> Akta Kelahiran.pdf
                    </button>
                </div>
            <?php endif; ?>
            <input type="file" id="sertifikat_kejuaraan"
                value="<?= set_value('sertifikat_kejuaraan', $pendaftar['sertifikat_kejuaraan']) ?>"
                class="form-control <?= validation_show_error('sertifikat_kejuaraan') ? 'is-invalid' : '' ?>"
                name="sertifikat_kejuaraan" accept="application/pdf">
            <span class="text-danger"><?= validation_show_error('sertifikat_kejuaraan') ?></span>
        </div>
    </div>
</div>