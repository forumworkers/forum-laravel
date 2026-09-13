<?php

namespace Database\Factories;

use App\Models\Calification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CalificationFactory extends Factory
{

  protected $model = Calification::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [
       'calification_name' => $this->faker->randomElement(['Positiva','Negativa']),
       // 'url_name' => $this->faker->name(),
       // 'user_id' => $this->faker->numberBetween(1, 3)  
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
   ];
}
}
