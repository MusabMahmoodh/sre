<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccEntries extends Migration
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
            'entry_type_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],            
            'planned_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'paid_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null' => TRUE,
            ],            
            'cr_total'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'dr_total'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'notes'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 256,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (entry_type_id) REFERENCES ven_acc_entry_type(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_entries');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_entries');
    }
}