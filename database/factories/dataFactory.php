<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

class dataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Data::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'streetName' => $this->faker->streetName,
            'postCode' => $this->faker->postCode,
            'country' => $this->faker->country,
            'purchaseDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'creditCardType' => $this->faker->creditCardType,
            'creditCardNumber' => $this->faker->creditCardNumber,
            'creditCardExpirationDate' => $this->faker->creditCardExpirationDate,
            'UserName' => $this->faker->UserName,
            'password' => $this->faker->password,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber,
        ];
    }
}
