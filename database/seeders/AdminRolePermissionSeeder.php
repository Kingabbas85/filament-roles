<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        // Admin User
        Role::create([
            'name' => 'user',
            'guard_name' => 'web',
        ]);
        // Admin branch
        Role::create([
            'name' => 'branch',
            'guard_name' => 'web',
        ]);
        // Admin company
        Role::create([
            'name' => 'company',
            'guard_name' => 'web',
        ]);
        // Admin manager
        Role::create([
            'name' => 'manager',
            'guard_name' => 'web',
        ]);
        // Admin sales
        Role::create([
            'name' => 'sales',
            'guard_name' => 'web',
        ]);




         // Admin User
         Permission::create([
            'name' => 'Admin User',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin User Create
        Permission::create([
            'name' => 'Admin User Create',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin User Edit
        Permission::create([
            'name' => 'Admin User Edit',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin User delete
        Permission::create([
            'name' => 'Admin User Delete',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);

        // Admin Role
        Permission::create([
            'name' => 'Admin Role',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Role Create
        Permission::create([
            'name' => 'Admin Role Create',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Role Edit
        Permission::create([
            'name' => 'Admin Role Edit',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Role delete
        Permission::create([
            'name' => 'Admin Role Delete',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);

        // Admin Permission
        Permission::create([
            'name' => 'Admin Permission',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Permission Create
        Permission::create([
            'name' => 'Admin Permission Create',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Permission Edit
        Permission::create([
            'name' => 'Admin Permission Edit',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);
        // Admin Permission delete
        Permission::create([
            'name' => 'Admin Permission Delete',
            'guard_name' => 'web',
            'group'     =>  'admin'
        ]);

    }
}
