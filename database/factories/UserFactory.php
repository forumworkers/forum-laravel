<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
        // return [
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => static::$password ??= Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ];

      $password = password_hash('Test1234',PASSWORD_BCRYPT);

      $email = 'foromaster@gmail.com';

      return [
       'img' => 'user.png',
       'banner' => 'userbanner.png',  
       'username' => $this->faker->unique()->randomElement(['adminforoworkers','moderadorforoworkers','userforoworkers']),
            // 'email' => fake()->unique()->safeEmail(),
       'email' => $this->faker->unique()->randomElement(['admin@gmail.com','free@gmail.com','vip@gmail.com']),
       'email_verified_at' => now(),
            // 'email_verified_at' => date('y-m-d'),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
       'password' => $password,
       'token' => $password,  
       'remember_token' => Str::random(10),
       'role_id' => $this->faker->numberBetween(1,2),
       'statu_id' => $this->faker->numberBetween(0, 1),
       'country_id' => $this->faker->numberBetween(1, 7),
        // 'user_id' => 1,
        // 'product_id' => 1,
       'is_buyer' => $this->faker->numberBetween(0,1),
       'theme_color' => $this->faker->randomElement(['gray','black']),
       'rank_id' => $this->faker->numberBetween(1, 5),
       'membership_start' => $this->faker->randomElement(['2024-02-24 20:01:59','2024-03-24 20:01:59']),
       'membership_end' => $this->faker->randomElement(['2024-04-24 20:01:59','2024-05-24 20:01:59']),
       'terms' => 1,
       'is_verified' => $this->faker->numberBetween(0,1),
       // 'is_ignored' => $this->faker->numberBetween(0,1),
       'is_banned' => $this->faker->numberBetween(0,1),
       'reason_id' => $this->faker->numberBetween(1,7),
       'url_profile' => $this->faker->randomElement(['https://www.udemy.com/user/jonathan-castro-33/','https://www.workana.com/freelancer/bc85b1df7df61ffb748ee88bf2a14905','https://www.upwork.com/freelancers/~016c272f36ca6d79ee']),
       'ip_adress' => $this->faker->randomElement(['192.168.1','192.168.2','192.168.3']),
     ];
    

   }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
      return $this->state(fn (array $attributes) => [
        'email_verified_at' => null,
      ]);
    }
  }
