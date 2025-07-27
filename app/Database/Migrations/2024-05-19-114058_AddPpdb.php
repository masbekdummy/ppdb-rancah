<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddPpdb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ppdb_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '210'
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'nama_panggilan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => '30'
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'asal_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'kewarganegaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'anak_ke' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => true
            ],
            'jumlah_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => true
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true
            ],
            'jarak_tempuh' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true
            ],
            'foto_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'foto_ijazah' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('ppdb_id', true);
        $this->forge->createTable('ppdb');
    }

    public function down()
    {
        $this->forge->dropTable('ppdb');
    }
}
