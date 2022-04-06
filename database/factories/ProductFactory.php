<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'title' => $title = $this->faker->name(),
			'slug' => Str::slug($title),
			'description' => $this->faker->text(200),
			'image' => "https://source.unsplash.com/random",
			'status' => 1
		];
	}
}
