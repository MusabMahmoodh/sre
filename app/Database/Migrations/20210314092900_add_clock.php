<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddClock extends Migration
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
            'work_group'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'elapse_time_sec'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'start_time'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'updated_on'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'status'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'comment' => '1-active,2-pause,3-stopped',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (work_group) REFERENCES ven_work_group(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_clock');
    }

    public function down()
    {
        $this->forge->dropTable('ven_clock');
    }
}