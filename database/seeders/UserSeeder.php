<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création de l'utilisateur administrateur
        $adminUser = User::factory()->create([
            'username' => 'Admin Vente de livre',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Azerty@123'),
            'status' => true,
            'email_verified_at' => now(),
        ]);

        // Attribution du rôle "SuperAdmin" à l'utilisateur administrateur
        $adminRole = Role::where('name', 'SuperAdmin')->first();
        $adminUser->assignRole([$adminRole->id]);

        // Création du deuxième utilisateur avec le rôle "Client"
        $visitorUser = User::factory()->create([
            'username' => 'Test',
            'email' => 'client@gmail.com',
            'password' => Hash::make('Client123'),
            'status' => true,
            'email_verified_at' => now(),
        ]);

        // Attribution du rôle "Client" à l'user
        $visitorRole = Role::where('name', 'Client')->first();
        $visitorUser->assignRole([$visitorRole->id]);

        //Pour la photo de profil /////

        // Chemin vers l'image source sur votre ordinateur
       $sourceImagePath = public_path('other/blank.png'); // Assurez-vous que le chemin est correct
        // Vérifiez si le fichier source existe
       if (File::exists($sourceImagePath)) {
        // Chemin de destination
        $destinationDirectory = storage_path('app/public/photo_profils');
        $destinationImagePath = $destinationDirectory . '/blank.png';

        // Créez le répertoire de destination s'il n'existe pas déjà
        if (!File::exists($destinationDirectory)) {
            File::makeDirectory($destinationDirectory, 0755, true, true);
        }

        // Copiez le fichier source vers le répertoire de stockage des médias
        File::copy($sourceImagePath, $destinationImagePath);

        // Ajoutez la photo de profil à l'utilisateur administrateur en utilisant le chemin de la copie
        $adminUser->addMedia($destinationImagePath)->toMediaCollection('photo_profils');
        /* $visitorUser->addMedia($destinationImagePath)->toMediaCollection('photo_profils'); */
    }
    }
}
