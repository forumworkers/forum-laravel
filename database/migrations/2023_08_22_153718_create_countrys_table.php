<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Country;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('countrys', function (Blueprint $table) {
    		$table->id();        
    		$table->string('country_name');
    		// $table->float('latitude');
    		// $table->float('longitude');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('country_flag')->null();
            $table->string('ip_max')->null();                    
    		$table->timestamps();
    	});

    	$country= new country;
    	$country->country_name= 'Argentina';
    	$country->latitude= -38.4160;
    	$country->longitude= -63.6166;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';             
    	$country->save();

    	$country= new country;
    	$country->country_name= 'Bolivia';
    	$country->latitude= -16.2901;
    	$country->longitude= -63.5886;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();

    	$country= new country;
    	$country->country_name= 'España';
    	$country->latitude= 40.4636;
    	$country->longitude= -3.7492;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();

    	$country= new country;
    	$country->country_name= 'Mexico';
    	$country->latitude= 23.6345;
    	$country->longitude= -102.5527;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();

    	$country= new country;
    	$country->country_name= 'Estados Unidos';
    	$country->latitude= 37.0902;
    	$country->longitude= -95.7128;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();

    	$country= new country;
    	$country->country_name= 'Chile';
    	$country->latitude= -35.6751;
    	$country->longitude= -71.5429;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();

    	$country= new country;
    	$country->country_name= 'Venezuela';
    	$country->latitude= 6.4237;
    	$country->longitude= -66.5897;
        $country->country_flag= 'argentina.png';
        $country->ip_max= '192.168.00';           
    	$country->save();    	

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('countrys');
    }
};
