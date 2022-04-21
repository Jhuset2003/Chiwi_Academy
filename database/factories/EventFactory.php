<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date,
            'max_capability' => $this->faker->numberBetween(1, 100),
            'link' => $this->faker->url,
            'image' => $this->faker->url,
            'description' => $this->faker->text,
            'isImportant' => $this->faker->boolean,
        ];
    }
}
