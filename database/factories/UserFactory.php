<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique->safeEmail,
            'phone' => function () {
                $areaCode = '11';
                $firstPart = '9' . rand(1, 9) . '000';
                $secondPart = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);

                $phoneNumber = "($areaCode) $firstPart-$secondPart";
                return $phoneNumber;
            },
            'password' => bcrypt($this->faker->password),
            'money' => 0,
            'fake_money' => 0
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}