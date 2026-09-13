<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Order;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('orders', function (Blueprint $table) {
    		$table->id();
    		$table->string('order');
    		$table->string('email');
    		$table->string('payer_email');
            // $table->string('banner');
            // $table->string('username');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
    		$table->unsignedInteger('membership_id');
    		$table->string('payer_id');
            // $table->unsignedInteger('statu_id');           
            // $table->boolean('is_buyer');
            // $table->string('theme_color');
            // $table->timestamp('membership_start')->nullable();
            // $table->timestamp('membership_end')->nullable();
            // $table->rememberToken();
    		$table->timestamps();
    	});

    	$order = new Order;
    	$order->order = '7XC478168J411440B';
    	$order->email = 'vip@gmail.com'; 
    	$order->payer_email = 'sb-ielxt19265843@personal.example.com';
    	$order->membership_id = 1;
    	$order->payer_id = 'H64MNAYFRNRJ6';             
    	$order->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('orders');
    }
};
