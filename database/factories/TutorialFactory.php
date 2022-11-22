<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutorial>
 */
class TutorialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
	return [
	    'user_id' => fake()->regexify('([1-9]|[12][0-9]|3[01])'),
	    'category_id' => fake()->regexify('([4-9]|1[0-8])'),
	    'title' => fake()->sentence(5, true),
	    'content' => fake()->paragraphs(10, true),
        ];
    }
}
