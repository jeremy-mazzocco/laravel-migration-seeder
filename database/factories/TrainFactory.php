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
            'azienda'  => fake()->randomElement(['Trenitalia', 'Eurostar', 'Frecciarossa', 'Flixtrein']),
            'stazione_di_partenza'  => fake()->city(),
            'stazione_di_arrivo'  => fake()->city(),
            'orario_di_partenza' => fake()->time(),
            'orario_di_arrivo' => fake()->dateTimeBetween('-1 day', '+1 day'),
            'codice_treno' => fake()->randomNumber(5, true),
            'numero_di_carrozze' => fake()->numberBetween(7, 20),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean(),
        ];
    }
}
