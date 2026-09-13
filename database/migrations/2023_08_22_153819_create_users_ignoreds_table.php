<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserIgnored;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('users_ignoreds', function (Blueprint $table) {
    		$table->id();
    		$table->unsignedInteger('user_id')->nullable();
    		$table->unsignedInteger('user_id_msg')->nullable();
            // $table->unsignedInteger('calification_id');
            // $table->unsignedInteger('user_id_client');
            // $table->longText('review');
            // $table->longText('review_back')->nullable();
    		$table->boolean('is_ignored')->nullable();
    		$table->timestamps();
    	});

    	$userpost = new UserIgnored;
    	$userpost->user_id = 1;
    	$userpost->user_id_msg = 2;
    	$userpost->is_ignored = 1;               
    	$userpost->save();

    	$userpost = new UserIgnored;
    	$userpost->user_id = 1;
    	$userpost->user_id_msg = 3;
    	$userpost->is_ignored = 0;               
    	$userpost->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('users_ignoreds');
    }
};
