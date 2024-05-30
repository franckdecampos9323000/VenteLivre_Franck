<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Définition des permissions
        $permissions = [

            //User simple alias client
            ['name' => 'total-user', 'description' => 'Cette permission signifie qu\'un client peut tout faire sur la partie client'],
            ['name' => 'partial-user', 'description' => 'Cette permission signifie qu\'un client peut faire toutes les actions sur la partie client mais il ne peut pas voir les séquences contenues dans les chapitres des formations.'],

            //dashboard
            ['name' => 'dashboard', 'description' => 'Elle permet de voir les statistiques sur le dashboard (Tout les administrateurs doivent avoir cette permission au moins).'],

            //annonce
            ['name' => 'annonce-list', 'description' => 'Permet de voir la liste des formations'],
            ['name' => 'annonce-create', 'description' => 'Permet de créer une formation'],
            ['name' => 'annonce-edit', 'description' => 'Permet de modifier une formation'],
            ['name' => 'annonce-delete', 'description' => 'Permet de supprimer une formation'],
            ['name' => 'annonce-history', 'description' => 'Permet de voir l\'historique des formations'],

            //notiification
            ['name' => 'message-list', 'description' => 'Permet de voir la liste des notiifcations'],
            ['name' => 'message-create', 'description' => 'Permet de créer une notiifcation'],
            ['name' => 'message-edit', 'description' => 'Permet de modifier une notiifcation'],
            ['name' => 'message-delete', 'description' => 'Permet de supprimer une notiifcation'],

            //user
            ['name' => 'user-list', 'description' => 'Permet de voir la liste des utilisateurs'],
            ['name' => 'user-create', 'description' => 'Permet de créer un utilisateur'],
            ['name' => 'user-edit', 'description' => 'Permet de modifier un utilisateur'],
            ['name' => 'user-delete', 'description' => 'Permet de supprimer un utilisateur'],

            //role
            ['name' => 'role-list', 'description' => 'Permet de voir la liste des rôles'],
            ['name' => 'role-create', 'description' => 'Permet de créer un rôle'],
            ['name' => 'role-edit', 'description' => 'Permet de modifier un rôle'],
            ['name' => 'role-delete', 'description' => 'Permet de supprimer un rôle'],

            //Permission
            ['name' => 'permission-list', 'description' => 'Permet de voir la liste des permissions'],

            /* //History
            ['name' => 'history-list', 'description' => 'Permet de voir la liste des historiques'],
            ['name' => 'history-delete', 'description' => 'Permet de supprimer une historique'], */
        ];

        // Création des permissions
        foreach ($permissions as $permissionData) {
            Permission::firstOrCreate(['name' => $permissionData['name']], ['description' => $permissionData['description']]);
        }
    }
}
