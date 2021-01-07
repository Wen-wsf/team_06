<?php

namespace Database\Factories;

use App\Models\team06_level;
use Illuminate\Database\Eloquent\Factories\Factory;

class team06_levelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = team06_level::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date=$this->faker->dateTime();
        return [
            'id'=>rand(0,300),
            'description'=>$this->faker->word,
            'created_at'=>$date,
            'updated_at'=>$date
        ];
    }
}
