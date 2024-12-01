<?php

namespace Database\Factories;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'kabanata' => $this->faker->sentence(3),  // A random 3-word sentence as the title
           'content' => $this->faker->paragraph(5),  // A random paragraph with 5 sentences
        ];
    }
}
