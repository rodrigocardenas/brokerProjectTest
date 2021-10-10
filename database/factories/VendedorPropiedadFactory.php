<?php

namespace Database\Factories;

use App\Models\Propiedad;
use App\Models\Vendedor;
use App\Models\VendedorPropiedad;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendedorPropiedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VendedorPropiedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_vendedor' => Vendedor::inRandomOrder()->first()->id,
            'id_propiedad' => Propiedad::inRandomOrder()->first()->id,
        ];
    }
}
