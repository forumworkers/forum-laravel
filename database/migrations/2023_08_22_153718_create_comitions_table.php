<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Comition;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('comitions', function (Blueprint $table) {
    		$table->id();
    		$table->string('comition_name',255)->nullable();
            // $table->string('url_name',255)->nullable();          
            // $table->longText('post_content')->nullable();
            // $table->unsignedInteger('maincategory_id');   
    		$table->timestamps();
    	});

    	$comition = new Comition;
    	$comition->comition_name = 'Corresponden al comprador';       
    	$comition->save();


    	$comition = new Comition;
    	$comition->comition_name = 'Corresponden al vendedor';       
    	$comition->save();


    	$comition = new Comition;
    	$comition->comition_name = 'No existe';       
    	$comition->save(); 	
    		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('comitions');
    }
};
