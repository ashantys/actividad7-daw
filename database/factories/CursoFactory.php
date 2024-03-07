<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Couso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $min = 1; // Definir el valor mínimo
        $max = 3; // Definir el valor máximo
        $id_kits = random_int($min, $max); 

        return [
            'contenido' => $this->faker->paragraph,
            'titulo' => $this->faker->sentence,
            'portada' => $this->faker->imageUrl(),
            'id_kits' => $id_kits,
        ];
    }
}
