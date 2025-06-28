<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClassReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_reservation' => $this->faker->numberBetween(1,5),
            'id_classtype' => $this->faker->numberBetween(1,6),
            'class_type' => $this->faker->word(),
            'id_schedulemat' => $this->faker->numberBetween(1,10),
            'schedule_mat' => $this->faker->dayOfWeek().' '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm().' a '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm(),
            'id_schedulevesp' => $this->faker->numberBetween(1,10),
            'schedule_vesp' => $this->faker->dayOfWeek().' '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm().' a '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm(),
            'id_user' =>  $this->faker->numberBetween(1,10),
            'username' => $this->faker->userName()
        ];
    }
}
