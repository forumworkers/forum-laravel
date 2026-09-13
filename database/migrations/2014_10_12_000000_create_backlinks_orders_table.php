<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\BacklinkOrder;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('backlinks_orders', function (Blueprint $table) {
    		$table->id();
    		$table->string('order');    	
    		$table->string('payer_email');            
    		$table->unsignedInteger('maincategory_id');
    		$table->string('payer_id');            
    		$table->timestamps();
    	});

    	$order = new BacklinkOrder;
    	$order->order = '7XC478168J411440B';    
    	$order->payer_email = 'sb-ielxt19265843@personal.example.com';
    	$order->maincategory_id = 41;
    	$order->payer_id = 'H64MNAYFRNRJ6';             
    	$order->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('backlinks_orders');
    }
};
