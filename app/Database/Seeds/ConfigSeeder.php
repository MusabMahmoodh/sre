<?php
/**
 * Insert all site config values
 * Execute following command from project root and make sure to login as apache user or sudo
 * php spark db:seed ConfigSeeder
 */


namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ConfigSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'reference'     => 'wp_url',
                'value'         => 'https://www.canopuz.com/'
            ],
            [
                'id'            => 2,
                'reference'     => 'wp_path',
                'value'         => '/mnt/www/general/www.canopuz.com/'
            ],
            [
                'id'            => 3,
                'reference'     => 'entity_lock_duration_sec',
                'value'         => '300'
            ]
        ];

        $this->db->table('ven_config')->insertBatch($data);
    }
}
