<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => 'Reservacion de '.$this->faker->word().$this->faker->dayOfWeek().' de '.$this->faker->monthName().' de '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm().' a '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm(),
            'datereservation' => $this->faker->date(),
            'day' => $this->faker->dayOfMonth(),
            'month' => $this->faker->month(),
            'year' => $this->faker->year(),
            'day_description' => $this->faker->dayOfWeek(),
            'month_description' => $this->faker->monthName(),
            'hour_initial' => $this->faker->numberBetween(1,12),
            'hour_finish' => $this->faker->numberBetween(1, 12),
            'time_hour' => $this->faker->numberBetween(1, 12).' '.$this->faker->numberBetween(1, 55).' '.$this->faker->amPm(),
            'time_hour_initial' => $this->faker->amPm(),
            'time_hour_finish' => $this->faker->amPm(),
            'id_schedule' => $this->faker->numberBetween(1, 500),
            'id_type_class' => $this->faker->numberBetween(1, 8),
            'note' => $this->faker->sentence(),
        ];
    }
}
