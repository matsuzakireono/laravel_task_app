<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Furniture;
use Faker\Generator as Faker;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Furniture>
 */
class FurnitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $min = 1000;
        $max = 100000;
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->numberBetween($min, $max),
            'prefecture' => $this->faker->prefecture, // 都道府県に修正
            'address' => $this->faker->address,
            'image' => 'https://picsum.photos/400/300?random=',
            'review' => $this->faker->randomFloat(1, 1, 5),
            'is_visible' => $this->faker->boolean,
            'created_at' => $this->faker->dateTimeBetween('-10 year', 'now')->format('Y/m/d H:i:s'),
            'updated_at' => now(),
        ];
    }
}