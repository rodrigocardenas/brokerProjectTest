<?php

namespace Database\Factories;

use App\Models\Comprador;
use App\Models\Propiedad;
use App\Models\SolicitudVisita;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudVisitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitudVisita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_comprador' => Comprador::inRandomOrder()->first()->id,
            'id_propiedad' => Propiedad::inRandomOrder()->first()->id,
            'estado' => $this->faker->randomElement(SolicitudVisita::ESTADOS),
            'fecha_solicitada' => $this->faker->dateTime(),
        ];
    }
}
