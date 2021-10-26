<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccountUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'account_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'user_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'start_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'default' => 1,
            ],
            'end_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'default' => 3164981314,
            ],
            'priviledge'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
                'comment' => '{"read":1,"write":1,"grand":0}',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (account_id) REFERENCES ven_account(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (user_id) REFERENCES wp_users(ID)');

        $this->forge->addKey('account_id', true);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('ven_account_user');
    }

    public function down()
    {
        $this->forge->dropTable('ven_account_user');
    }
}