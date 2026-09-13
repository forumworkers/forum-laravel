<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Revition;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('revitions', function (Blueprint $table) {
    		$table->id();
    		$table->integer('revition')->nullable();
            // $table->string('url_name',255)->nullable();          
            // $table->longText('post_content')->nullable();
            // $table->unsignedInteger('maincategory_id');   
    		$table->timestamps();
    	});

    	$revition = new Revition;
    	$revition->revition = 0;       
    	$revition->save();

    	$revition = new Revition;
    	$revition->revition = 1;       
    	$revition->save();

    	$revition = new Revition;
    	$revition->revition = 2;       
    	$revition->save();

    	$revition = new Revition;
    	$revition->revition = 3;       
    	$revition->save();
    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('revitions');
    }
};
