<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CourtReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_court_reservation' => $this->faker->numberBetween(1,5),
            'id_court' => $this->faker->numberBetween(1,6),
            'court_name' => $this->faker->word(),
            'date_reservation' => $this->faker->date(),
            'hour_reservation' => $this->faker->numberBetween(1, 12).' '.$this->faker->numberBetween(1, 55).' '.$this->faker->amPm(),
            'id_user' =>  $this->faker->numberBetween(1,10),
            'username' => $this->faker->userName()
        ];
    }
}
