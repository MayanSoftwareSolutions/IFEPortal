<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisations;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organisations = [
            [
                'id'             => 1,
                'organisation_name' => 'IFE Global Logistics',
                'organisation_code' => '001',
                'created_at'      => now(),
            ],
            [
                'id'             => 2,
                'organisation_name' => 'IFE Air Freight',
                'organisation_code' => '002',
                'created_at'      => now(),
            ],
            [
                'id'             => 3,
                'organisation_name' => 'Gravitas Ltd',
                'organisation_code' => '003',
                'created_at'      => now(),
            ],
        ];

        Organisations::insert($organisations);
    }
}
