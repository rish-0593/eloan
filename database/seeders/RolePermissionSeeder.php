<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin',
            'support',
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }

        Role::updateOrCreate(['name' => 'Admin'])->givePermissionTo([
            'admin',
        ]);

        // create admin and assign permission
        $user = User::firstOrCreate(
            [ 'id' => 1 ],
            [
                'name' => 'Admin',
                'email' => 'admin@singdilse.com',
                'password' => Hash::make('qwerty@123'),
            ]
        )
        ->assignRole('Admin');

        Role::updateOrCreate(['name' => 'Support'])->givePermissionTo([
            'support',
        ]);
    }
}
