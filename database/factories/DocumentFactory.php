<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=> $this->faker->text(24),
            "code" => $this->faker->randomLetter(),
            "content" => $this->faker->text(128),
            "td_creation" => $this->faker->dateTimeThisYear('-3 months'),
            "author" => $this->faker->name(),
        ];
    }
}
