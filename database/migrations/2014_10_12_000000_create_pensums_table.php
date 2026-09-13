<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Pensum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('pensums', function (Blueprint $table) {
    		$table->id();
    		$table->string('pensum_name');
    		$table->string('pensum_kwone');
    		$table->string('pensum_kwtwo');
    		$table->string('pensum_kwthree');
    		$table->string('pensum_url');
    		$table->string('pensum_video');      
    		$table->unsignedInteger('course_id');    	             
    		$table->timestamps();
    	});

    	$reply = new Pensum;
    	$reply->pensum_name = 'Instalacion';
    	$reply->pensum_kwone = 'Estructura';
    	$reply->pensum_kwtwo = 'Controladores';
    	$reply->pensum_kwthree = 'Server local';
    	$reply->pensum_url = 'instalacion';
    	// $reply->pensum_video = '1)herramientashd.mp4';
    	$reply->pensum_video = 'https://www.youtube.com/embed/X8bTrd0wgOo';

    	
    	$reply->course_id = 1;    	        
    	$reply->save();

    	$reply = new Pensum;
    	$reply->pensum_name = 'Rutas';
    	$reply->pensum_kwone = 'Estructura';
    	$reply->pensum_kwtwo = 'Controladores';
    	$reply->pensum_kwthree = 'Server local';
    	$reply->pensum_url = 'rutas';
    	// $reply->pensum_video = '2)herramientashd.mp4';
    	$reply->pensum_video = 'https://www.youtube.com/embed/X8bTrd0wgOo';
    	$reply->course_id = 1;    	        
    	$reply->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('pensums');
    }
};
