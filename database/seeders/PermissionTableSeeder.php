<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            
            'users-list',
            'users-show',
            'users-create',
            'users-edit',
            'users-delete',

            'roles-list',
            'roles-show',
            'roles-create',
            'roles-edit',
            'roles-delete',

            'permissions-list',
            'permissions-show',
            'permissions-create',
            'permissions-edit',
            'permissions-delete',

            'posts-create',
            'posts-edit',
            'posts-delete',

        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Administrator
        $role = Role::create(['name' => 'Administrator']);
        $admin_permissions = $data;
        foreach($admin_permissions as $permission) {
            $permission = Permission::where('name', $permission)->first();
            $role->givePermissionTo($permission);
        }

        // User
        $role = Role::create(['name' => 'User']);
        $user_permissions = [];
        foreach($user_permissions as $permission) {
            $permission = Permission::where('name', $permission)->first();
            $role->givePermissionTo($permission);
        }

    }
}