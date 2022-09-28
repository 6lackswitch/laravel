<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);

        $role = Role::create(['name' => 'editor'])
            ->givePermissionTo(['create', 'edit', 'read']);

        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['create', 'edit', 'read']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'viewer']);
        $role->givePermissionTo('read');
    }
}
