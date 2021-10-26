<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserSettings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'value'          => [
                'type'           => 'TEXT',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (user_id) REFERENCES wp_users(ID)');

        $this->forge->createTable('ven_user_settings');
    }

    public function down()
    {
        $this->forge->dropTable('ven_user_settings');
    }
}