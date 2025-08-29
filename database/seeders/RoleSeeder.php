<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stuntingRole = Role::firstOrCreate(['name' => 'admin_stunting']);
        Role::firstOrCreate(['name' => 'admin_rlth']);

        $stuntingUser = User::firstOrCreate(
            ['email' => 'admin@stunting.test'],
            [
                'name' => 'Admin Stunting',
                'password' => Hash::make('stuntinglkt'),
            ]
        );
        $stuntingUser->assignRole($stuntingRole);
    }
}
