<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création du rôle "SuperAdmin" avec toutes les permissions
        $superAdminRole = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $permissions = Permission::pluck('id')->toArray();
        $superAdminRole->syncPermissions($permissions);

        // Création du rôle "Client" avec des permissions spécifiques
        $visitorRole = Role::firstOrCreate(['name' => 'Client']);
        $visitorRole->syncPermissions(['total-user', 'partial-user']);
    }
}
