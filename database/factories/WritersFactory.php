<?php

namespace Database\Factories;
use App\Models\Writers;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writers>
 */
class WritersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=Writers::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'bio'=>$this->faker->sentence(5),
            'genre'=>$this->faker->numberBetween(1,5),
            'contact'=>$this->faker->phoneNumber(),
        ];
    }
}
