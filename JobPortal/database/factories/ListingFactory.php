<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(mt_rand(1, 3)),
            'company' => $this->faker->company(),
            'location' => $this->faker->address(),
            'description' => $this->faker->paragraph(mt_rand(10, 20)),
            'user_id' => mt_rand(1, 2),
            'website' => 'example.com',
            'tags' => 'writer, developer, python'
        ];
    }
}
