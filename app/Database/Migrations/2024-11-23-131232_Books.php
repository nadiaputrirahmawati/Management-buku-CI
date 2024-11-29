<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_buku' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['publish', 'private'],
                'null' => true,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => true
            ],
            'genre' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id_buku', true);

        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
