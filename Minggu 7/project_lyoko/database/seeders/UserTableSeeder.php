<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'dea',
            'email' => 'mdaifulah@gmail.com',
            'password' => bcrypt('04082000'),
        ]);
    }
}