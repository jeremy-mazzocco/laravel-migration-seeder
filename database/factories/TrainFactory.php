<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda'  => fake()->words(10),
            'stazione di partenza'  => fake()->city(),
            'stazione di arrivo'  => fake()->city(),
            'orario di partenza' => fake()->time(),
            'orario di arrivo' => fake()->time(),
            'codice treno' => fake()->unique()->randomNumber(5, true),
            'numero di carrozze' => fake()->nullable()->numberBetween(7, 20),
            'in orario' => fake()->default(true)->boolean(),
            'cancellato' => fake()->default(false)->boolean(),
        ];
    }
}
