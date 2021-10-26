<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccTagEntry extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tag_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'entry_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (tag_id) REFERENCES ven_acc_tag(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (entry_id) REFERENCES ven_acc_entries(id)');

        $this->forge->addKey('tag_id', true);
        $this->forge->addKey('entry_id', true);
        $this->forge->createTable('ven_acc_tag_entry');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_tag_entry');
    }
}