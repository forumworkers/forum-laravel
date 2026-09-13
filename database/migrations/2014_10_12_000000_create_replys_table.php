<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Reply;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('replys', function (Blueprint $table) {
    		$table->id();        
    		$table->longText('reply')->nullable();
    		$table->unsignedInteger('user_id');
    		$table->unsignedInteger('message_id');               
    		$table->timestamps();
    	});

    	$reply = new Reply;
    	$reply->reply = '<p>replica negocio uno</p>';
    	$reply->user_id = 1;
    	$reply->message_id = 1;          
    	$reply->save();

    	$reply = new Reply;
    	$reply->reply = '<p>replica negocio dos</p>';
    	$reply->user_id = 2;
    	$reply->message_id = 2;          
    	$reply->save();

    	$reply = new Reply;
    	$reply->reply = '<p>replica negocio tres</p>';
    	$reply->user_id = 2;
    	$reply->message_id = 3;          
    	$reply->save();



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('replys');
    }
};
