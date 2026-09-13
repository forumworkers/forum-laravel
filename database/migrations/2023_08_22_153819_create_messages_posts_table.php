<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('message_id');
            $table->unsignedInteger('user_id_message');
            $table->boolean('is_ignored');
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
        Schema::dropIfExists('messages_posts');
    }
};
