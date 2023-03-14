<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agenda;
use App\Models\Role;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'uuid' => 'Adm1n846-39aa-4e3d-bfb5-b85bd8fbd482',
            'name' => "Admin Sunny",
            'email' => "admin@sunny.com",
            'password' => Hash::make('password')
        ]);
      
        User::create([
            'uuid' => 'Us3r7a2f-7f67-4603-9b44-306ede59c53f',
            'name' => "User Sunny",
            'email' => "user@sunny.com",
            'password' => Hash::make('password')
        ]);

        Role::create([
            'uuid' => 'Adm1n846-39aa-4e3d-bfb5-b85bd8fbd482',
            'is_supervisor' => true,
            'is_admin' => false,
            'is_user' => false,
        ]);

        Role::create([
            'uuid' => 'Us3r7a2f-7f67-4603-9b44-306ede59c53f',
            'is_supervisor' => false,
            'is_admin' => false,
            'is_user' => true,
        ]);

    }
}
