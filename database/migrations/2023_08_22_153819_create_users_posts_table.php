<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserPost;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_posts', function (Blueprint $table) {
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
        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 1;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 1;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 2;
        $userpost->post_id = 2;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 2;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 3;
        $userpost->post_id = 3;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 3;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 4;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 4;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 5;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 5;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 6;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 6;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 7;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 7;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 8;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 8;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 9;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 9;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 10;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 10;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 11;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 11;      
        $userpost->save();

        // ronda 2 de propiedades digitales
        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 41;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 1;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 42;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 2;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 43;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 3;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 44;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 4;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 45;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 5;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 46;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 6;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 47;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 7;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 48;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 8;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 49;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 9;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 50;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 10;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 51;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 11;      
        $userpost->save();


                // servicios
        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 12;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 12;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 2;
        $userpost->post_id = 13;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 13;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 3;
        $userpost->post_id = 14;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 14;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 15;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 15;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 16;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 16;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 17;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 17;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 18;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 18;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 19;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 19;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 20;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 20;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 21;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 21;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 22;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 22;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 23;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 23;      
        $userpost->save();


        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 24;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 24;      
        $userpost->save();


        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 25;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 25;      
        $userpost->save();


        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 26;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 26;      
        $userpost->save();


        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 27;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 27;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 28;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 28;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 29;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 29;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 30;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 30;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 31;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 31;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 32;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 32;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 33;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 33;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 34;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 34;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 35;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 35;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 36;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 36;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 37;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 37;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 38;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 38;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 39;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 39;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 40;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 40;      
        $userpost->save();

        // ronda 2 servicios
        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 52;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 12;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 53;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 13;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 54;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 14;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 55;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 15;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 56;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 16;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 57;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 17;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 58;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 18;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 59;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 19;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 60;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 20;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 61;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 21;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 62;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 22;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 63;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 23;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 64;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 24;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 65;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 25;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 66;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 26;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 67;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 27;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 68;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 28;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 69;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 29;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 70;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 30;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 71;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 31;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 72;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 32;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 73;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 33;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 74;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 34;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 75;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 35;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 76;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 36;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 77;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 37;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 78;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 38;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 79;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 39;      
        $userpost->save();

        $userpost = new UserPost;
        $userpost->user_id = 1;
        $userpost->post_id = 80;
        // Categoria ejemplo Dominios
        $userpost->maincategory_id = 40;      
        $userpost->save();






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_posts');
    }
};
