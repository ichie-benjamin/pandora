<?php

namespace Database\Factories;

use App\Models\restaurants;
use Illuminate\Database\Eloquent\Factories\Factory;

class restaurantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = restaurants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'phone' => $this->faker->word,
        'photo' => $this->faker->word,
        'address' => $this->faker->word,
        'about' => $this->faker->text,
        'twitter' => $this->faker->word,
        'instagram' => $this->faker->word,
        'youtube' => $this->faker->word,
        'background' => $this->faker->word,
        'slug' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
