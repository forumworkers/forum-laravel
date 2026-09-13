<?php

namespace Database\Factories;

use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class MainCategoryFactory extends Factory
{

  protected $model = MainCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     return [
       'maincategory_name' =>  $this->faker->randomElement(['Dominios','Sitios','FanPages','Grupos de Facebook','Perfiles de Facebook','Canales de Youtube','Cuentas de Twitter','Cuentas de Instagram','Cuentas de TikTotk','Canales de Telegram','Otras Redes con Seguidores','Diseñadores','SEO','Redactores','Programadores','Editores de Video','lucutores','Socios','Exchangers','Otros Servicios']),
       'maincategory_url' => $this->faker->randomElement(['dominios','sitios','fan-pages','grupos-de-facebook','perfiles-de-facebook','canales-de-youtube','cuentas-de-twitter','cuentas-de-instagram','cuentas-de-tikTotk','canales-de-telegram','otras-redes-con-seguidores','disenadores','seo','redactores','programadores','editores-de-video','locutores','socios','exchangers','otros-servicios']), 
       'subcategory_id' => $this->faker->numberBetween(1,2),  
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
   ];
}
}
