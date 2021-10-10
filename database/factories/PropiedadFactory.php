<?php

namespace Database\Factories;

use App\Models\Propiedad;
use App\Models\Vendedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropiedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propiedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'direccion' => $this->faker->address(),
            'id_tipo' => 1,
            'id_vendedor' => Vendedor::inRandomOrder()->first()->id,
            'estado' => $this->faker->randomElement(Propiedad::ESTADOS),
        ];
    }
}
