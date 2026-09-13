<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Type;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('types', function (Blueprint $table) {
    		$table->id();
    		$table->string('type_name',255)->nullable();
            $table->string('type_color',255);
            // $table->string('url_name',255)->nullable();          
            // $table->longText('post_content')->nullable();
            // $table->unsignedInteger('maincategory_id');   
            $table->timestamps();
        });

    	$type = new Type;
    	$type->type_name = 'Me Ofrezco';
        $type->type_color = 'bg-success';          
        $type->save();

        $type = new Type;
        $type->type_name = 'Se Solicita';
        $type->type_color = 'bg-info';          
        $type->save();

        $type = new Type;
        $type->type_name = 'Constancia';
        $type->type_color = 'bg-warning';        
        $type->save();

        $type = new Type;
        $type->type_name = 'Compra';
        $type->type_color = 'bg-success';        
        $type->save();

        $type = new Type;
        $type->type_name = 'Venta';
        $type->type_color = 'bg-info';        
        $type->save();

        $type = new Type;
        $type->type_name = 'Intercambio';
        $type->type_color = 'bg-warning';        
        $type->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('types');
    }
};
