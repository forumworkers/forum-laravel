<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            // $table->string('banner');
            // $table->string('username');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->unsignedInteger('user_id');
            // $table->unsignedInteger('price_id');
            // $table->unsignedInteger('statu_id');           
            // $table->boolean('is_buyer');
            // $table->string('theme_color');
            // $table->timestamp('membership_start')->nullable();
            // $table->timestamp('membership_end')->nullable();
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
