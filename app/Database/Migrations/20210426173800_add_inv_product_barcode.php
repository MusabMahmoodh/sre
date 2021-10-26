<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProductBarcode extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'barcode'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 256,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (product_id) REFERENCES ven_inv_product(id)');

        $this->forge->addKey('product_id', true);
        $this->forge->addKey('barcode', true);
        $this->forge->createTable('ven_inv_product_barcode');
    }

    public function down()
    {
        $this->forge->dropTable('ven_inv_product_barcode');
    }
}