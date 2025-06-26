<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->dayOfWeek().' '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm().' a '.$this->faker->numberBetween(1,12).' '.$this->faker->amPm(),
            'day' => $this->faker->dayOfMonth(),
            'month' => $this->faker->month(),
            'year' => $this->faker->year(),
            'day_description' => $this->faker->dayOfWeek(),
            'month_description' => $this->faker->monthName(),
            'hour_initial' => $this->faker->numberBetween(1,12),
            'hour_finish' => $this->faker->numberBetween(1, 12),
            'time_hour' => $this->faker->numberBetween(1, 12).' '.$this->faker->numberBetween(1, 55).' '.$this->faker->amPm(),
            'minuts' => $this->faker->numberBetween(1, 50),
            'time_hour_initial' => $this->faker->amPm(),
            'time_hour_finish' => $this->faker->amPm(),
            'id_type_class' => $this->faker->numberBetween(1, 8),
            'id_type_schedule' => $this->faker->numberBetween(1, 2),
        ];
    }
}
