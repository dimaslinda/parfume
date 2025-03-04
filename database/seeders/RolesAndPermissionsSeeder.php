<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'Reseller']);

        // Create permissions
        $manageUsersPermission = Permission::create(['name' => 'manage users']);
        $editProfilePermission = Permission::create(['name' => 'edit profile']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($manageUsersPermission);
        $userRole->givePermissionTo($editProfilePermission);

        // Assign roles to users
        $admin = User::where('email', 'admin@admin.com')->first();
        $admin->assignRole('admin');
    }
}

