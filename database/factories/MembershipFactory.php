<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MembershipFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       

      return [      
       'membership' => $this->faker->randomElement(['free','vip']),       
       'user_id' => $this->faker->numberBetween(1,2),
       'price_id' => $this->faker->numberBetween(1, 2),
       // 'country_id' => $this->faker->numberBetween(1, 50),
        // 'user_id' => 1,
        // 'product_id' => 1,
       // 'is_buyer' => $this->faker->numberBetween(0,1),
       // 'theme_color' => $this->faker->randomElement(['gray','black']),
       // 'membership_start' => $this->faker->randomElement(['2024-02-24 20:01:59','2024-03-24 20:01:59']),
       // 'membership_end' => $this->faker->randomElement(['2024-04-24 20:01:59','2024-05-24 20:01:59']),
     ];

   }

    
  }
