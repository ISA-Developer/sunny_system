<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'username' => 'Supervisor',
                'email' => 'supervisor@sunny.com',
                'password' => 'Supervisor'
            ],
            [
                'username' => 'Admin',
                'email' => 'admin@sunny.com',
                'password' => 'Admin'
            ],
            [
                'username' => 'User',
                'email' => 'user@sunny.com',
                'password' => 'User'
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
        }
    }
}
