<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fotos>
 */
class FotosFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      "user_id" => User::factory(),
      "name_foto" => fake()->sentence(),
      "file" => "park-day.jpg",
      "caption" => fake()->sentence(),
      "description" => fake()->sentence(),
      "likes" => 1000,
    ];
  }
}
