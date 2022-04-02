<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;

class ProductsFactory extends Factory
{
    protected $model = Products::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'name' => $this->faker->name,
            'status' => $this->faker->randomElement($array = array ('available','unavailable')),
            'data' => '{ "Color":"'. $this->faker->randomElement($array = array('red','green','white')) . '", "Size":"'. $this->faker->randomElement($array = array('small','big','medium')).'"}',
            'timestamp' =>$this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),           

         ];
    }
}
