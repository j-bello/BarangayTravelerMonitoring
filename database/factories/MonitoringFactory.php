<?php

namespace Database\Factories;

use App\Models\Monitoring;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Monitoring::class;

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
            'day_one'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_two'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_three'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_four'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_five'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_six'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
           'day_seven'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
           'day_eight'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_nine'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_ten'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_eleven'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_twelve'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_thirteen'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
            'day_fourteen'=> $this->faker->randomElement($array = array ('None','Fever','Dry Cough','Tiredness','Aches and Pains','Sore throat','Diarrhea','Conjunctivities','Headache','Loss of taste','Loss of smell','Skin Rash')),
           'status'=> $this->faker->randomElement($array = array ('Monitoring','In testing','Cleared')),
            'result'=> $this->faker->randomElement($array = array ('N/A','Positive','Negative')),


        ];
    }
}
