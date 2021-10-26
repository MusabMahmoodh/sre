<?php
/**
 * Insert all site config values
 * Execute following command from project root and make sure to login as apache user or sudo
 * php spark db:seed ConfigSeeder
 */

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountGroupSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'account_id'    => NULL,
                'parent_id'     => NULL,
                'name'          => 'Assets',
                'code'          => '',
                'affects_gross' => 0
            ],
            [
                'id'            => 2,
                'account_id'    => NULL,
                'parent_id'     => NULL,
                'name'          => 'Liabilities and Owners Equity',
                'code'          => '',
                'affects_gross' => 0
            ],
            [
                'id'            => 3,
                'account_id'    => NULL,
                'parent_id'     => NULL,
                'name'          => 'Incomes',
                'code'          => '',
                'affects_gross' => 0
            ],
            [
                'id'            => 4,
                'account_id'    => NULL,
                'parent_id'     => NULL,
                'name'          => 'Expenses',
                'code'          => '',
                'affects_gross' => 0
            ]
        ];

        $this->db->table('ven_acc_groups')->insertBatch($data);
    }
}