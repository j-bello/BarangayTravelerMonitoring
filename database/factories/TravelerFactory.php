<?php

namespace Database\Factories;

use App\Models\Traveler;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Traveler::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'arrival_date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'release_date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->city,
            'sex' => $this->faker-> randomElement($array = array ('Male','Female')),
            'age' => $this->faker->randomDigit,
            'date_of_birth'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'contactNo' => $this->faker->e164PhoneNumber,



        ];
    }
}
