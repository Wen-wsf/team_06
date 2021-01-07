<?php

namespace Database\Factories;

use App\Models\team06_typhoon;
use Illuminate\Database\Eloquent\Factories\Factory;

class team06_typhoonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = team06_typhoon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrived=$this->faker->boolean;
        if($arrived){
            $powerLV=rand(1,3);
            $level=rand(1,30);
        }
        else
        {
            $powerLV=0;
            $level=0;
        }
        $date=$this->faker->dateTime();
        return [
            'year'=>rand(2000,2200),
            'id'=>rand(1,200),
            'name'=>$this->faker->word,
            'arrived'=>$arrived,
            'powerLV'=>$powerLV,
            'level'=>$level,
            'created_at'=>$date,
            'updated_at'=>$date
        ];
    }
}
