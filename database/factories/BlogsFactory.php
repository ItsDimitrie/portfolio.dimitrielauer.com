<?php

namespace Database\Factories;

use App\Models\Blogsp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blogs::class;



    public function definition(): array
    {
        return [
            'titel' => fake()->title(),
            'text' => fake()->text(),
            'afbeelding' => 'http://loremflickr.com/800/600?lock='.
            $this->faker->numberBetween(1, 65535),
        ];
    }
}
