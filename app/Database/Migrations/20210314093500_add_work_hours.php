<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddWorkHours extends Migration
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
            'work_group'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'week_number'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'unsigned'       => true,
                'comment' => '1-Monday,2-Tuesday,3-Wednesday,4-Thursday,5-Friday,6-saturday,7-Sunday',
            ],
            'start_time'          => [
                'type'           => 'TIME',
            ],
            'end_time'          => [
                'type'           => 'TIME',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (work_group) REFERENCES ven_work_group(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_working_hours');
    }

    public function down()
    {
        $this->forge->dropTable('ven_working_hours');
    }
}