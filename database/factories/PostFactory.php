<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
	return [
	    'thread_id' => fake()->regexify('([1-9]|[1-9][0-9]|1[0-9][0-9]|200)'),
	    'user_id' => fake()->regexify('([1-9]|[12][0-9]|3[01])'),
	    'comment' => fake()->paragraph(2, false),
        ];
    }
}
