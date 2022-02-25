<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'doejohn@gmail.com',
            'password' => Hash::make('Password@123'),
            'date_of_birth' => '2002-10-22',
            'user_type' => 'admin',
        ]);
    }
}
