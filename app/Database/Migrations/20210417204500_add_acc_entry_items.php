<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccEntryItems extends Migration
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
            'entity_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 22,
                'unsigned'       => true,
            ],   
            'ledger_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],      
            'amount'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'debit_credit'          => [
                'type'           => 'CHAR',
                'constraint'     => 1,
                'comment' => 'd-debit,c-credit',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (entity_id) REFERENCES ven_acc_entries(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (ledger_id) REFERENCES ven_acc_ledgers(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_entry_items');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_entry_items');
    }
}