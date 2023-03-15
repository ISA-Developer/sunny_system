<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'user_id' => User::where('username', 'Supervisor')->first()->id,
                'is_supervisor' => true,
                'is_admin' => false,
                'is_user' => false,
            ],
            [
                'user_id' => User::where('username', 'Admin')->first()->id,
                'is_supervisor' => false,
                'is_admin' => true,
                'is_user' => false,
            ],
            [
                'user_id' => User::where('username', 'User')->first()->id,
                'is_supervisor' => false,
                'is_admin' => false,
                'is_user' => true,
            ],
        ];

        foreach ($roles as $role) {
            UserRole::create([
                'user_id' => $role['user_id'],
                'is_supervisor' => $role['is_supervisor'],
                'is_admin' => $role['is_admin'],
                'is_user' => $role['is_user']
            ]);
        }
    }
}
