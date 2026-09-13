<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Calification;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('califications', function (Blueprint $table) {
            $table->id();
            $table->string('calification_name',255)->nullable();
            $table->string('calification_color',255)->nullable();
            $table->string('calification_icon',255)->nullable();                
            // $table->unsignedInteger('user_id');   
            $table->timestamps();
        });

        $calification = new Calification;
        $calification->calification_name = 'Positiva';
        $calification->calification_color = 'bg-success';
        $calification->calification_icon = 'fa-solid fa-thumbs-up';
        // $calification->calification_icon = 'fa-regular fa-thumbs-up';             
        $calification->save();

        $calification = new Calification;
        $calification->calification_name = 'Negativa';
        $calification->calification_color = 'bg-danger';
        $calification->calification_icon = 'fa-solid fa-thumbs-down';
        // $calification->calification_icon = 'fa-regular fa-thumbs-down';            
        $calification->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('califications');
    }
};
