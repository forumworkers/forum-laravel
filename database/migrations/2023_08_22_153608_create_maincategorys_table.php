<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\MainCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincategorys', function (Blueprint $table) {
            $table->id();
            $table->string('maincategory_icon',255)->nullable();
            $table->string('maincategory_name',255)->nullable();
            $table->string('maincategory_url',255)->nullable();
            $table->string('promo_url',255)->nullable();
            $table->string('promo_banner',255)->nullable();
            $table->string('promo_video',255)->nullable();                  
            $table->unsignedInteger('subcategory_id');   
            $table->timestamps();
        });

        // 'maincategory_name' =>  $this->faker->randomElement(['Dominios','Sitios','FanPages','Grupos de Facebook','Perfiles de Facebook','Canales de Youtube','Cuentas de Twitter','Cuentas de Instagram','Cuentas de TikTotk','Canales de Telegram','Otras Redes con Seguidores','Diseñadores','SEO','Redactores','Programadores','Editores de Video','lucutores','Socios','Exchangers','Otros Servicios']),
        // 'maincategory_url' => $this->faker->randomElement(['dominios','sitios','fan-pages','grupos-de-facebook','perfiles-de-facebook','canales-de-youtube','cuentas-de-twitter','cuentas-de-instagram','cuentas-de-tikTotk','canales-de-telegram','otras-redes-con-seguidores','disenadores','seo','redactores','programadores','editores-de-video','locutores','socios','exchangers','otros-servicios']), 
        // 'subcategory_id' => $this->faker->numberBetween(1,2),  

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-house';
        $maincategory->maincategory_name = 'Dominios';
        $maincategory->maincategory_url = 'dominios';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-passport';
        $maincategory->maincategory_name = 'Sitios';
        $maincategory->maincategory_url = 'sitios';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-key';
        $maincategory->maincategory_name = 'FanPages';
        $maincategory->maincategory_url = 'fan-pages';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-key';
        $maincategory->maincategory_name = 'Grupos de Facebook';
        $maincategory->maincategory_url = 'grupos-de-facebook';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-key';
        $maincategory->maincategory_name = 'Perfiles de Facebook';
        $maincategory->maincategory_url = 'perfiles-de-facebook';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-key';
        $maincategory->maincategory_name = 'Scripts';
        $maincategory->maincategory_url = 'scripts';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-key';
        $maincategory->maincategory_name = 'Themes';
        $maincategory->maincategory_url = 'themes';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-tv';
        $maincategory->maincategory_name = 'Canales de Youtube';
        $maincategory->maincategory_url = 'canales-de-youtube';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-dove';
        $maincategory->maincategory_name = 'Cuentas de Twitter';
        $maincategory->maincategory_url = 'cuentas-de-twitter';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-dove';
        $maincategory->maincategory_name = 'Cuentas de Tibia';
        $maincategory->maincategory_url = 'cuentas-de-tibia';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-dove';
        $maincategory->maincategory_name = 'Cuentas de League of Legends';
        $maincategory->maincategory_url = 'cuentas-de-league-of-legends';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        // servicios
        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-palette';
        $maincategory->maincategory_name = 'Exchangers';
        $maincategory->maincategory_url = 'exchangers';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-palette';
        $maincategory->maincategory_name = 'Diseñadores';
        $maincategory->maincategory_url = 'disenadores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-magnifying-glass';
        $maincategory->maincategory_name = 'SEO';
        $maincategory->maincategory_url = 'seo';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-pencil';
        $maincategory->maincategory_name = 'Redactores';
        $maincategory->maincategory_url = 'redactores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Programadores PHP';
        $maincategory->maincategory_url = 'programadores-de-php';
        $maincategory->subcategory_id = 2;
        $maincategory->save();


        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Programadores Wordpress';
        $maincategory->maincategory_url = 'programadores-de-wordpress';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Programadores Javascript';
        $maincategory->maincategory_url = 'programadores-de-javascript';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Programadores Python';
        $maincategory->maincategory_url = 'programadores-de-python';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Otros Programadores';
        $maincategory->maincategory_url = 'otros-programadores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'DBA';
        $maincategory->maincategory_url = 'administrador-de-base-de-datos';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'SysAdmin';
        $maincategory->maincategory_url = 'sys-admin';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'ScrumMaster';
        $maincategory->maincategory_url = 'scrum-master';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Inteligencia Artificial';
        $maincategory->maincategory_url = 'inteligencia-artificial';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Support';
        $maincategory->maincategory_url = 'support';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Asistente Virtual';
        $maincategory->maincategory_url = 'asistente-virtual';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Call Center';
        $maincategory->maincategory_url = 'call-center';
        $maincategory->subcategory_id = 2;
        $maincategory->save();



        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Agentes WhatsApp';
        $maincategory->maincategory_url = 'agentes-whatsapp';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Real Estate';
        $maincategory->maincategory_url = 'real-estate';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Profesores';
        $maincategory->maincategory_url = 'profesores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Traductores';
        $maincategory->maincategory_url = 'traductores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();



        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Marketing Digital';
        $maincategory->maincategory_url = 'marketing-digital';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Excel';
        $maincategory->maincategory_url = 'excel';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Contabilidad';
        $maincategory->maincategory_url = 'contabilidad';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Matematicas';
        $maincategory->maincategory_url = 'matematicas';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Locutores';
        $maincategory->maincategory_url = 'locutores';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Ventas';
        $maincategory->maincategory_url = 'ventas';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'LinkedIn';
        $maincategory->maincategory_url = 'linkedin';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Branding';
        $maincategory->maincategory_url = 'branding';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Coach';
        $maincategory->maincategory_url = 'coach';
        $maincategory->subcategory_id = 2;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Php';
        $maincategory->maincategory_url = 'php';
        $maincategory->subcategory_id = 3;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-code';
        $maincategory->maincategory_name = 'Laravel';
        $maincategory->maincategory_url = 'laravel';
        $maincategory->subcategory_id = 3;
        $maincategory->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maincategorys');
    }
};
