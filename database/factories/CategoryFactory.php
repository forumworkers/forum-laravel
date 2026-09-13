<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

  protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [
       'category_name' => $this->faker->randomElement(['Negocios','Conversando','Redes Sociales']),
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
   ];
}
}
