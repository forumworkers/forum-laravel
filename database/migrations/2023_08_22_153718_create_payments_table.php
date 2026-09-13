<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Payment;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('payments', function (Blueprint $table) {
    		$table->id();
    		$table->string('payment_name',255)->nullable();
            // $table->string('url_name',255)->nullable();          
            // $table->longText('post_content')->nullable();
            // $table->unsignedInteger('maincategory_id');   
    		$table->timestamps();
    	});

    	$payment = new Payment;
    	$payment->payment_name = 'Paypal';       
    	$payment->save();

    	$payment = new Payment;
    	$payment->payment_name = 'Payoneer';       
    	$payment->save();

    	$payment = new Payment;
    	$payment->payment_name = 'Airtm';       
    	$payment->save();

    	$payment = new Payment;
    	$payment->payment_name = 'Uphold';       
    	$payment->save();

    	$payment = new Payment;
    	$payment->payment_name = 'Binance';       
    	$payment->save();

    	$payment = new Payment;
    	$payment->payment_name = 'Cualquiera';       
    	$payment->save();    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('payments');
    }
};
