<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\SubCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorys', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory_name',255)->nullable();          
            $table->unsignedInteger('category_id');   
            $table->timestamps();
        });

        // 'subcategory_name' => $this->faker->randomElement(['Propiedades Digitales','Servicios','Redes Sociales','Posicionamiento Web']),
        // 'category_id' => 1  

        $subcategory = new SubCategory;
        $subcategory->subcategory_name = 'Propiedades Digitales';
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new SubCategory;
        $subcategory->subcategory_name = 'Servicios';
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new SubCategory;
        $subcategory->subcategory_name = 'Redes Sociales';
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new SubCategory;
        $subcategory->subcategory_name = 'Posicionamiento Web';
        $subcategory->category_id = 1;
        $subcategory->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorys');
    }
};
