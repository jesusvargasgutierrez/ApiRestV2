<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->name(),
            'id_event' => $this->faker->numberBetween(1, 500),
            'id_type_class' => $this->faker->numberBetween(1, 8),
            'photo_url' => $this->faker->imageUrl(360, 360, 'people', true, 'womens'),
        ];
    }
}
