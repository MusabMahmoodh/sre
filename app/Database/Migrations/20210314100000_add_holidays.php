<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddHolidays extends Migration
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
            'holiday'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'date_of_holiday'          => [
                'type'           => 'DATE',
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
        $this->forge->createTable('ven_holidays');
    }

    public function down()
    {
        $this->forge->dropTable('ven_holidays');
    }
}