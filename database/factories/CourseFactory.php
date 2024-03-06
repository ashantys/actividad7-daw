<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Couso>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contenido' => $this->faker->paragraph,
            'titulo' => $this->faker->sentence,
            'portada' => $this->faker->imageUrl(),
            'id_kits' => \App\Models\Kit::factory(),
        ];
    }
}
