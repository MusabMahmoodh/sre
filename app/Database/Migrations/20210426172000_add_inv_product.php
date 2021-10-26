<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInvProduct extends Migration
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
            'product_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 256,
            ],
            'unit_scale'          => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'comment' => '1-count, 2-Grams, 3-kg, 4-cm, 5-meter, 6-feet',
                'default' => 1,
            ],
            'reorder_point'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'unit_cost'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
            'unit_price'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
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
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (inventory_id) REFERENCES ven_inventory(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (created_by) REFERENCES wp_users(ID)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (updated_by) REFERENCES wp_users(ID)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_inv_product');
    }

    public function down()
    {
        $this->forge->dropTable('ven_inv_product');
    }
}