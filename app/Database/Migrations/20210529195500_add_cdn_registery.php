<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCdnregister extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'bucket'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            'local_path'         => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'reference'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'uploaded_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'status'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'comment' => '1-available, 2-deleted',
                'default' => 1,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_cdn_registery');
    }

    public function down()
    {
        $this->forge->dropTable('ven_cdn_registery');
    }
}