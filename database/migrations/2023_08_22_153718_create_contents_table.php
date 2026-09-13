<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Content;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('contents', function (Blueprint $table) {
    		$table->id();
    		$table->string('content_name',255)->nullable();
    		$table->string('content_color',255);            
    		$table->timestamps();
    	});

    	$content = new Content;
    	$content->content_name = 'Articulo';
    	$content->content_color = 'bg-success';          
    	$content->save();

    	$content = new Content;
    	$content->content_name = 'Tutorial';
    	$content->content_color = 'bg-success';          
    	$content->save();

    	$content = new Content;
    	$content->content_name = 'Conversacion';
    	$content->content_color = 'bg-success';          
    	$content->save();

    	$content = new Content;
    	$content->content_name = 'Pregunta';
    	$content->content_color = 'bg-success';          
    	$content->save();    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('contents');
    }
};
