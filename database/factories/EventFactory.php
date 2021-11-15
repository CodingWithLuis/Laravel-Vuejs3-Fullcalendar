<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event' => $this->faker->word(),
            'date_start' => $this->faker->dateTimeBetween('2021-11-8', '2021-11-10'),
            'date_end' => $this->faker->dateTimeBetween('2021-11-10', '2021-11-14'),
        ];
    }
}
