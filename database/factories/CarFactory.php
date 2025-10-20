<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class CarFactory extends Factory
{
    protected $model = \App\Models\Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $availableImages = [
            'cars/golf.jpg',
            'cars/golf2.jpg'
        ];
        $images = $this->faker->randomElements($availableImages, $this->faker->numberBetween(1, 2));
        return [
            'title' => $this->faker->words(2, true),
            'mark' => $this->faker->company(),
            'year' => $this->faker->year(),
            'price' => $this->faker->numberBetween(5000, 50000),
            'km_riding' => $this->faker->numberBetween(1000, 200000),
            'apk' => $this->faker->date(),
            'fuel_type' => $this->faker->randomElement(['diesel', 'benzine', 'electric', 'hybrid']),
            'image_urls' => $images,
        ];
    }
}
