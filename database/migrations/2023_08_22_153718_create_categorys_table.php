<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',255)->nullable();
            $table->timestamps();
        });


        // 'category_name' => $this->faker->randomElement(['Negocios','Gestores de Contenido','Redes Sociales']),

        $category = new Category;
        $category->category_name = 'Negocios';
        $category->save();

        $category = new Category;
        $category->category_name = 'Gestores de Contenido';
        $category->save();

        $category = new Category;
        $category->category_name = 'Redes Sociales';
        $category->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys');
    }
};
