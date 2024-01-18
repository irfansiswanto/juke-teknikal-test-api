<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => $this->faker->firstNameMale(),
            "last_name" => $this->faker->lastName(),
            "date_of_birth" => $this->faker->date('Y-m-d'),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "province" => 1,
            "city" => 1,
            "street" => $this->faker->address(),
            "zip_code" => $this->faker->numerify('#####'),
            "ktp" => $this->faker->numerify('#################'),
            'position' => $this->faker->randomElement(['manager', 'supervisor', 'staff']),
            "bank_acc_name" => $this->faker->name(),
            "bank_acc_number" => $this->faker->numerify('###########'),
        ];
    }
}
