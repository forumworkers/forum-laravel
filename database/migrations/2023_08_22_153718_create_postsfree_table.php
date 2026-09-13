<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\PostFree;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('posts_free', function (Blueprint $table) {
    		$table->id();
    		$table->string('post_name',255)->nullable();
    		$table->string('url_name',255)->nullable();          
    		$table->longText('post_content')->nullable();
    		$table->string('post_img',255)->nullable();  
    		$table->unsignedInteger('maincategory_id');
    		$table->unsignedInteger('content_id');
            // $table->unsignedInteger('site_id');
            // $table->string('price',255)->nullable();
            // $table->integer('price');
            // $table->unsignedInteger('comition_id');
            // $table->unsignedInteger('payment_id');
            // $table->unsignedInteger('revition_id');
    		$table->boolean('publish')->nullable();
    		$table->integer('views')->default('0');
    		$table->string('promo_banner',255)->nullable();   
            // $table->unsignedInteger('comment_id');         
    		$table->timestamps();
    	});


    	$post = new PostFree;
    	$post->post_name = 'chatting one';
    	$post->url_name = 'chatting-one';
    	$post->post_content = '<h1>Sample Conversation</h1><br><p>Please read the forum rules before posting</p>';      
    	$post->maincategory_id = 41;
    	$post->content_id = 3;                           
    	$post->save();

    	$post = new PostFree;
    	$post->post_name = 'chatting one';
    	$post->url_name = 'chatting-one';
    	$post->post_content = '<h1>Sample Conversation</h1><br><p>Please read the forum rules before posting</p>';     
    	$post->maincategory_id = 42;
    	$post->content_id = 3;                             
    	$post->save();

    	$post = new PostFree;
    	$post->post_name = 'chatting one';
    	$post->url_name = 'chatting-one';
    	$post->post_content = '<h1>Sample Conversation</h1><br><p>Please read the forum rules before posting</p>';     
    	$post->maincategory_id = 42;
    	$post->content_id = 3;                             
    	$post->save();




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('posts_free');
    }
};
