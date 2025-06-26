<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'number_member' => $this->faker->numerify(),
            'datebirthday' => $this->faker->date(),
            'email' => $this->faker->email(),
            'username' => $this->faker->userName(),
            'password' => $this->faker->sha1(),            
            'photoprofile' => $this->faker->imageUrl(360, 360, 'people', true, 'womens'),
            'cellphone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'colony' => $this->faker->citySuffix()
        ];
    }
}
