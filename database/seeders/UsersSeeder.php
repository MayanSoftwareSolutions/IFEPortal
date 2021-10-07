<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Thomas Miles',
                'email'          => 'tmiles@ifeuk.com',
                'job_title'          => 'Business Intelligence Director',
                'department'          => 'Business Intelligence',
                'organisation'          => 'IFE Global',
                'password'       => bcrypt('Storme123%'),
                'remember_token' => null,
                'created_at'      => now(),
            ],
            [
                'id'             => 2,
                'name'           => 'Sean Bezuidenhout',
                'email'          => 'sbez@ifeuk.com',
                'job_title'          => 'Business Intelligence Analyst',
                'department'          => 'Business Intelligence',
                'organisation'          => 'IFE Global',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'created_at'      => now(),
            ],
        ];

        User::insert($users);
    }
}