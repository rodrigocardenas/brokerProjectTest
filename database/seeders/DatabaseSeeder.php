<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserAdminSeeder::class);
        $this->call(CompradorSeeder::class);
        $this->call(VendedorSeeder::class);
        $this->call(PropiedadSeeder::class);
        $this->call(VendedorPropiedadSeeder::class);
        $this->call(SolicitudVisitaSeeder::class);

        $this->command->info('Dummy data seeded!');
    }
}
