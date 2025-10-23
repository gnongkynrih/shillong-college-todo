<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create permissions
        $studentPermission = Permission::create(['name' => 'student']);
        $adminPermission = Permission::create(['name' => 'admin']);

        //create roles
        $studentRole = Role::create(['name' => 'student']);
        $adminRole = Role::create(['name' => 'admin']);

        //assign permissions to roles
        $studentRole->givePermissionTo($studentPermission);
        
        $adminRole->givePermissionTo($adminPermission);
        $adminRole->givePermissionTo($studentPermission);
    }
}
