<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInvOrder extends Migration
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
            'inventory_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'order_date'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'customer'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'grand_total'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'payment_status'          => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'comment' => '1-pening, 2-paid, 3-cancelled, 4-claim returned',
            ],
            'order_status'          => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'comment' => '1-reserved/pending, 2-delivered, 3-cancelled, 4-returned',
            ],            
            'created_by'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'created_on'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'updated_by'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'updated_on'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'notes'          => [
                'type'           => 'TEXT',
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (inventory_id) REFERENCES ven_inventory(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (created_by) REFERENCES wp_users(ID)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (updated_by) REFERENCES wp_users(ID)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (customer) REFERENCES wp_users(ID)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_inv_order');
    }

    public function down()
    {
        $this->forge->dropTable('ven_inv_order');
    }
}