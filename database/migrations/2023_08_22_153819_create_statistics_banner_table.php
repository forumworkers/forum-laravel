<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\StatisticsBanner;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('statistics_banner', function (Blueprint $table) {
    		$table->id();
    		// $table->longText('keyword');
            $table->integer('maincategory_id');
    		$table->timestamps();
    	});    	

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('statistics_banner');
    }
};
