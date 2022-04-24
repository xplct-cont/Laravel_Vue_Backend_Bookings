<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bus_name' =>$this->faker->randomElement(["Dragon Lines","Charter Bus Co.","Blue Line Bus","Champion Express"]),
            'passenger_name' =>$this->faker->name,
            'address' =>$this->faker->address,
            'contact_no' =>$this->faker->numerify('##########')

        ];
    }
}
