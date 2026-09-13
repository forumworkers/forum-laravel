<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Comment;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('comments', function (Blueprint $table) {
    		$table->id();        
    		$table->longText('comment')->nullable();
    		$table->unsignedInteger('user_id');
    		$table->unsignedInteger('post_id'); 
           $table->boolean('publish')->nullable();              
           $table->timestamps();
       });

    	$comment = new Comment;
    	$comment->comment = '<p>pregunta negocio uno</p>';
    	$comment->user_id = 1;
    	$comment->post_id = 1;          
    	$comment->save();


    	$comment = new Comment;
    	$comment->comment = '<p>pregunta negocio dos</p>';
    	$comment->user_id = 2;
    	$comment->post_id = 2;              
    	$comment->save();

    	$comment = new Comment;
    	$comment->comment = '<p>pregunta negocio dos</p>';
    	$comment->user_id = 3;
    	$comment->post_id = 3;              
    	$comment->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('comments');
    }
};
