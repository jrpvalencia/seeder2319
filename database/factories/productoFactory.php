<?php

namespace Database\Factories;

use App\Models\producto;

use Illuminate\Database\Eloquent\Factories\Factory;

class productoFactory extends Factory
{
    protected $mode = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->sentences(),
            'descripcion' => $this->faker->paragraphs(),
  

        ];
    }
}
