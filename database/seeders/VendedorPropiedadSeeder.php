<?php

namespace Database\Seeders;

use App\Models\VendedorPropiedad;
use Illuminate\Database\Seeder;

class VendedorPropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VendedorPropiedad::truncate();
        VendedorPropiedad::factory(50)->create();
    }
}
