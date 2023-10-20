<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create user permissions
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'view user']);

        // create contact permissions
        Permission::create(['name' => 'edit contact']);
        Permission::create(['name' => 'delete contact']);
        Permission::create(['name' => 'create contact']);
        Permission::create(['name' => 'view contact']);

        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'teacher'])
            ->givePermissionTo(['edit contact', 'view contact', 'create contact', 'delete contact']);
    }
}
