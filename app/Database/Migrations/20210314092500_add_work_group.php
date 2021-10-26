<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddWorkGroup extends Migration
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
            'group_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            'time_zone'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
            ],
            'status'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'comment' => '0-pending, 1-Active,2-Inactive	',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_work_group');
    }

    public function down()
    {
        $this->forge->dropTable('ven_work_group');
    }
}