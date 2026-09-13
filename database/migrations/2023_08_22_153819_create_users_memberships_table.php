<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserMembership;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_memberships', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('membership_id');           
            $table->timestamps();
        });

        $usermem = new UserMembership;
        $usermem->user_id = 1;
        $usermem->membership_id = 1;      
        $usermem->save();

        $usermem = new UserMembership;
        $usermem->user_id = 1;
        $usermem->membership_id = 1;             
        $usermem->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_memberships');
    }
};
