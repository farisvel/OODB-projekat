<?php

namespace Database\Factories;
use App\Models\Subscription;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Subscription::class;
    
    public function definition()
    {
        return [
            'reader_id'=>$this->faker->numberBetween(1,50),
            'datum'=>$this->faker->date(),
            'genre_id'=>$this->faker->numberBetween(1,6),
        ];
    }
}
