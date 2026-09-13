<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Course;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('courses', function (Blueprint $table) {
    		$table->id();
    		$table->string('course_name');
    		$table->string('course_img');
    		$table->string('course_icon');
    		$table->string('course_url');
    		$table->longText('course_content')->nullable();
    		$table->longText('course_body')->nullable();        
    		$table->unsignedInteger('price_id');    	             
    		$table->timestamps();
    	});

    	$reply = new Course;
    	$reply->course_name = 'Laravel';
    	$reply->course_img = 'aprende-laravel-desde-cero.png';
    	$reply->course_icon = 'fa-solid circle-play';
    	$reply->course_url = 'aprende-laravel-desde-cero';
    	$reply->course_content = '<p>Aprende Laravel 10 desde cero y conviértete en un experto en el framework PHP más popular. Construye aplicaciones web escalables y descubre las mejores prácticas y técnicas de Laravel. ¡Inscríbete ahora!</p>';
    	$reply->course_body = '<ul>
    	<li>PHP estructurado y orientado a objetos desde 0 con PHP 8</li>
    	<li>¿Qué es PHP?, aprenderemos este importante concepto</li>
    	<li>LAMP Stack, Utilizar Linux, Apache, MySQL, PHP creando aplicaciones web</li>
    	<li>Crear un CRUD con PHP</li>
    	</ul>';
    	$reply->price_id = 1;    	        
    	$reply->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('courses');
    }
};
