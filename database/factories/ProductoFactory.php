<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'barcode' => $this->faker->randomNumber(),
            'descripcion' => $this->faker->sentence(),
            'stock' => $this->faker->randomNumber(2),
            'min_stock' => $this->faker->randomNumber(2),
            'max_stock' => $this->faker->randomNumber(2),
            'precio' => $this->faker->randomFloat(2, 0, 3),
            'ubicacion' => $this->faker->sentence(),
            'tipo_producto_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}
