<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->lastName,
            "firstName"=>$this->faker->firstName,
            "age"=>$this->faker->numberBetween($min = 0, $max = 99),
            "etat"=>$this->faker->boolean
        ];
    }
}
