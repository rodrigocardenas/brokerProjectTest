<?php

namespace Database\Seeders;

use App\Models\Vendedor;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::truncate();
        Vendedor::factory(50)->create();
    }
}
