<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class productoFactory extends Factory
{
    protected $model = producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' =>$this-> faker->sentence(),
            'descripcion' =>$this-> faker->paragraph(),
            'precio' =>$this-> faker->randomNumber(),
            'existencias' =>$this-> faker->randomNumber(),
            'proveedor' =>$this-> faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive ']),
        ];
    }
}
