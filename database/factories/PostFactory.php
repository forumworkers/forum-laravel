<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class PostFactory extends Factory
{

  protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [
       'post_name' => $this->faker->text(10),
       // 'url_name' => $this->faker->unique()->url(),
       'url_name' => $this->faker->randomElement(['negocio-uno','negocio-dos','negocios-tres','negocio-cuatro','negocio-cinco','negocio-seis','negocio-siete']),
       // 'post_content' => $this->faker->text(10),
       'post_content' => $this->faker->randomElement(['<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>']),
       'maincategory_id' => $this->faker->numberBetween(1,40),
       'type_id' => $this->faker->numberBetween(1,6),
       'site_id' => $this->faker->numberBetween(1,2),
       'price' => $this->faker->numberBetween(1,2),
       'payment_id' => $this->faker->numberBetween(1,2),
       'comition_id' => $this->faker->numberBetween(1,2),
       'revition_id' => $this->faker->numberBetween(1,2)                
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
     ];
   }
 }
