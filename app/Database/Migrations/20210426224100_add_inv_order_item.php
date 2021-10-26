<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInvOrderItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'product_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'quantity'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '20,4',
                'default' => 0.0000,
            ],
            'unit_price'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '25,2',
                'default' => 0.00,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (order_id) REFERENCES ven_inv_order(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (product_id) REFERENCES ven_inv_product(id)');

        $this->forge->addKey('order_id', true);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('ven_inv_order_item');
    }

    public function down()
    {
        $this->forge->dropTable('ven_inv_order_item');
    }
}