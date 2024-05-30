<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\NotificationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
