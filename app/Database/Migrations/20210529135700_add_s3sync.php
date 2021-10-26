<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddS3sync extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'label'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'bucket'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'local_path'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            's3_path'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'aws_access_key'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'aws_secret'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'remarks'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'status'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'comment' => '1-active, 2-disabled',
                'default' => 1,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_s3sync');
    }

    public function down()
    {
        $this->forge->dropTable('ven_s3sync');
    }
}