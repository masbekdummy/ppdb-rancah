<?php

namespace App\Models;

use CodeIgniter\Model;

class PpdbModel extends Model
{
    protected $table            = 'ppdb';
    protected $primaryKey       = 'ppdb_id';
    protected $allowedFields    = [
        'nisn',
        'password',
        'nama_lengkap',
        'nama_panggilan',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'keterangan_ayah',
        'alamat_ayah',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'keterangan_ibu',
        'alamat_ibu',
        'nama_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'alamat_wali',
        'alamat',
        'no_telp',
        'agama',
        'kewarganegaraan',
        'anak_ke',
        'jumlah_saudara',
        'jarak_tempuh',
        'status',
        'foto_siswa',
        'file_ijazah',
        'file_rapot',
        'ktp_orang_tua',
        'akta_kelahiran',
        'kartu_kesejahtraan',
        'surat_pernyataan',
        'sertifikat_kejuaraan',
        'jalur_pendaftaran',
    ];

    public $optionalField = ['nama_wali', 'tempat_lahir_wali', 'tanggal_lahir_wali', 'penghasilan_wali','pekerjaan_wali', 'alamat_wali', 'kartu_kesejahtraan', 'sertifikat_kejuaraan'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
}
