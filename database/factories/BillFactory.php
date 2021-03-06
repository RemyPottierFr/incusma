<?php

namespace Database\Factories;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bill::class;

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
