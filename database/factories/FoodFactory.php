<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->text($maxNbChars = 10),
            'price'=> rand(50,150),
            'short_description' =>$this->faker->text($maxNbChars = 50),
            'long_description' => $this->faker->text($maxNbChars = 300),
            'image_path'=>'na',
            'foodcategory_id'=> rand(1,50),

        ];
    }
}
