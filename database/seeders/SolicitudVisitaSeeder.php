<?php

namespace Database\Seeders;

use App\Models\SolicitudVisita;
use Illuminate\Database\Seeder;

class SolicitudVisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SolicitudVisita::truncate();
        SolicitudVisita::factory(50)->create();
    }
}
