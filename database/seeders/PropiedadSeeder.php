<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Seeder;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propiedad::truncate();
        Propiedad::factory(50)->create();
    }
}
