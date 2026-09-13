<?php

namespace Database\Factories;

use App\Models\MessagePost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class MessagePostFactory extends Factory
{

  protected $model = MessagePost::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [       
       'user_id' => $this->faker->numberBetween(1,3),
       'post_id' => $this->faker->numberBetween(1,10),
       'message_id' => $this->faker->numberBetween(7,10),
       'user_id_message' => $this->faker->numberBetween(1,3),
       'is_ignored' => $this->faker->numberBetween(0,1)



         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
     ];
   }
 }
