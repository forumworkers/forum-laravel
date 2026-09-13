<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\MainCategoryBacklink;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincategorys_backlinks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('maincategory_id');
            $table->unsignedInteger('backlink_id');           
            $table->timestamps();
        });

        $mcbacklink = new MainCategoryBacklink;
        $mcbacklink->maincategory_id = 41;
        $mcbacklink->backlink_id = 1;      
        $mcbacklink->save();

        // $usermem = new UserMembership;
        // $usermem->user_id = 1;
        // $usermem->membership_id = 1;             
        // $usermem->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maincategorys_backlinks');
    }
};
