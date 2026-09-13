<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Backlink;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('backlinks', function (Blueprint $table) {
    		$table->id();        
    		$table->string('backlink_url')->unique();
    		$table->string('backlink_email');
    		$table->boolean('is_buyer');             
    		$table->timestamps();
    	});

    	$backlink = new Backlink;
    	$backlink->backlink_url = 'https://lampforo.com/';
    	$backlink->backlink_email = 'contact@lampforo.com';
    	$backlink->is_buyer = 1;            
    	$backlink->save();    	

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('backlinks');
    }
};
