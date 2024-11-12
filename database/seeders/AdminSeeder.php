<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin' . time() . '@example.com', // Faking a unique email using timestamp
            'password' => Hash::make('password'), // Password is hashed for security
            'role' => 'admin', // Assuming you have a 'role' column in your users table
        ]);
    }
}
