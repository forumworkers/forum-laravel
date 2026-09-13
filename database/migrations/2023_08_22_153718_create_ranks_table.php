<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Rank;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('ranks', function (Blueprint $table) {
    		$table->id();        
    		$table->string('rank_name');            
    		$table->timestamps();
    	});

    	$rank = new Rank;
    	$rank->rank_name = 'Member';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'Programador';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'SEO';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'Marketer';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'Youtuber';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'Profesor';       
    	$rank->save();

    	$rank = new Rank;
    	$rank->rank_name = 'Instructor';       
    	$rank->save();    	

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('ranks');
    }
};
