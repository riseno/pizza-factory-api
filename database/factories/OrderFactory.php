<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'factory_id' => $this->faker->randomNumber(2),
            'name' => 'pizza_'.$this->faker->randomNumber(2),
            'size' => $this->faker->randomElement(['small', 'medium', 'large']),
            'toppings' => $this->faker->randomElements(['roast beef', 'bell peppers', 'onions', 'tomatos', 'mushrooms'])
        ];
    }
}
