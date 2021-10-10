<?php

namespace Database\Seeders;

use App\Models\Comprador;
use Illuminate\Database\Seeder;

class CompradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comprador::truncate();
        Comprador::factory(50)->create();
    }
}
