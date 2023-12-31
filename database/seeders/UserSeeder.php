<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::insert([
                    'name' => 'admin',
                    'email' => 'admin@grtech.com ',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'user',
                    'email' => 'user@grtech.com ',
                    'password' => bcrypt('password'),
                ]
            );
    }
}
