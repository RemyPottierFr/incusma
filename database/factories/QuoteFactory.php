<?php

namespace Database\Factories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "link" => "/uploads/test.pdf",
            "amount" => $this->faker->randomNumber(3),
            "status" => "accepted",
            "mission_id" => rand(0, 10),
        ];
    }
}
