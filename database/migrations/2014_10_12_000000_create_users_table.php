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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('banner');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('url_patreon')->nullable();
            $table->string('phone_whatsapp')->nullable();
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('statu_id');           
            $table->boolean('is_buyer');
            $table->string('theme_color');
            $table->unsignedInteger('rank_id'); 
            $table->timestamp('membership_start')->nullable();
            $table->timestamp('membership_end')->nullable();
            $table->boolean('terms');
            $table->boolean('is_verified');
            // $table->boolean('is_ignored');
            $table->boolean('is_banned');
            $table->unsignedInteger('reason_id');
            $table->string('url_profile')->nullable();
            $table->string('ip_adress'); 
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
