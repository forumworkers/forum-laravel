<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserPostFree;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_posts_free', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('maincategory_id');
            $table->timestamps();
        });

        //11 x 2 = 22 propiedades digitales 
        //29 x 2 = 58 propiedades digitales 
        // total 80 post

        // Propiedades digitales
        $userpost = new UserPostFree;
        $userpost->user_id = 1;
        $userpost->post_id = 1;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 41;      
        $userpost->save();

        $userpost = new UserPostFree;
        $userpost->user_id = 1;
        $userpost->post_id = 2;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 42;      
        $userpost->save();

        $userpost = new UserPostFree;
        $userpost->user_id = 1;
        $userpost->post_id = 3;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 42;      
        $userpost->save();



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_posts_free');
    }
};
