<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccLedgers extends Migration
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
            'account_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'group_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            'code'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 32,
            ],
            'opening_balance'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'opening_balance_debit_credit'          => [
                'type'           => 'CHAR',
                'constraint'     => 1,
                'comment' => 'd-debit,c-credit',
            ],
            'type'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default' => 0,
                'comment' => 'Bank or cash account 0-false,1-true',
            ],
            'reconciliation'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default' => 0,
                'comment' => '0-false,1-true',
            ],
            'notes'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 256,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (group_id) REFERENCES ven_acc_groups(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (account_id) REFERENCES ven_account(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_ledgers');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_ledgers');
    }
}
