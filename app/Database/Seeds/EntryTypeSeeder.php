<?php
/**
 * Insert all site config values
 * Execute following command from project root and make sure to login as apache user or sudo
 * php spark db:seed ConfigSeeder
 */

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EntryTypeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'account_id'    => NULL,
                'base_type'     => 1,
                'name'          => 'Receipt',
                'code'          => 'receipt',
                'description' => 'Received in Bank account or Cash account'
            ],
            [
                'id'            => 2,
                'account_id'    => NULL,
                'base_type'     => 1,
                'name'          => 'Payment',
                'code'          => 'payment',
                'description' => 'Payment made from Bank account or Cash account'
            ],
            [
                'id'            => 3,
                'account_id'    => NULL,
                'base_type'     => 1,
                'name'          => 'Contra',
                'code'          => 'contra',
                'description' => 'Transfer between Bank account and Cash account'
            ],
            [
                'id'            => 4,
                'account_id'    => NULL,
                'base_type'     => 1,
                'name'          => 'Journal',
                'code'          => 'journal',
                'description' => 'Transaction that does not involve a Bank account or Cash account'
            ],
        ];

        $this->db->table('ven_acc_entry_type')->insertBatch($data);
    }
}