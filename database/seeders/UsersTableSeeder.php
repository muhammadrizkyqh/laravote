<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nim' => '12345678',
            'nama' => 'Admin User',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'last_login_at' => now(),
        ]);

        User::create([
            'nim' => '87654321',
            'nama' => 'Regular User',
            'role' => 'user',
            'password' => Hash::make('password'),
            'last_login_at' => now(),
        ]);
    }
}
