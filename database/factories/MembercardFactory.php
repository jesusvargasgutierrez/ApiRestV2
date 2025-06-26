<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MembercardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_member' => $this->faker->numberBetween(1, 500),
            'number_card' => $this->faker->creditCardNumber(),
            'type_card' => $this->faker->creditCardType(),
            'day' => $this->faker->dayOfMonth(),
            'month' => $this->faker->month(),
            'year' => $this->faker->dayOfWeek(),
            'cvv' => $this->faker->dayOfWeek()
        ];
    }
}
