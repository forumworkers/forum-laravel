<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class SubCategoryFactory extends Factory
{

  protected $model = SubCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [
         'subcategory_name' => $this->faker->randomElement(['Propiedades Digitales','Servicios','Comunidad','Posicionamiento Web']),
         'category_id' => 1   
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
     ];
 }
}
