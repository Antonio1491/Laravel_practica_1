<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
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
        
        $name = $this->faker->sentence();

        return [
            'name'=> $name ,
            'slug' => Str::slug($name, '-'),
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
