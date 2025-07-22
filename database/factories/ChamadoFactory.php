<?php

namespace Database\Factories;

use App\Models\Chamado;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chamado>
 */
class ChamadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket'=> fake()->name(),
            'about_ticket' => fake()->name(),
            'prioridade' => fake()->randomElement(['baixa','media','alta'])
        ];
    }
}