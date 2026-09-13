<?php

namespace Database\Factories;

use App\Models\UserPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class UserPostFactory extends Factory
{

  protected $model = UserPost::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [       
       'user_id' => $this->faker->numberBetween(1,3),
       'post_id' => $this->faker->unique()->numberBetween(1,500),
       'maincategory_id' => $this->faker->numberBetween(1,11),        
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
     ];
   }
 }
