<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserCalification;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_califications', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('calification_id');
            $table->unsignedInteger('user_id_client');
            $table->string('username_client',255)->nullable();           
            $table->longText('review');
            $table->longText('review_back')->nullable();
            $table->boolean('accept');
            $table->timestamps();
        });

        $userpost = new UserCalification;
        $userpost->user_id = 1;
        $userpost->post_id = 1;
        $userpost->calification_id = 1;
        $userpost->user_id_client = 2;
        $userpost->review = 'genial buen servicio';
        $userpost->review_back = 'gracias pago realizado';
        $userpost->accept = 1;              
        $userpost->save();

        $userpost = new UserCalification;
        $userpost->user_id = 1;
        $userpost->post_id = 2;
        $userpost->calification_id = 2;
        $userpost->user_id_client = 2; 
        $userpost->review = 'mal servicio no lo recomiendo';
        $userpost->review_back = null;
        $userpost->accept = 0;             
        $userpost->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_califications');
    }
};
