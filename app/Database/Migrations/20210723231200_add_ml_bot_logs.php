<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMlBotLogs extends Migration
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
            'question_key'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 32,
                'null' => TRUE,
            ],
            'question'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'response'          => [
                'type'           => 'TEXT',
                'null' => TRUE,
            ],
            'bot_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'null' => TRUE,
            ],
            'intent'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'null' => TRUE,
            ],
            'dialog_state'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'null' => TRUE,
            ],
            'sentiment_label'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'null' => TRUE,
            ],
            'occurrent'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'default' => 1,
            ],
            'status'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default' => 1,
                'comment' => '1-pending, 2-added, 3-duplicate, 4-rejected',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_ml_bot_logs');
    }

    public function down()
    {
        $this->forge->dropTable('ven_ml_bot_logs');
    }
}
