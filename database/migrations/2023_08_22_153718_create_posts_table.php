<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Post;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_name',255)->nullable();
            $table->string('url_name',255)->nullable();          
            $table->longText('post_content')->nullable();
            $table->unsignedInteger('maincategory_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('site_id');
            // $table->string('price',255)->nullable();
            $table->integer('price');
            $table->unsignedInteger('comition_id');
            $table->unsignedInteger('payment_id');
            $table->unsignedInteger('revition_id');
            $table->boolean('publish')->nullable();
            $table->integer('views')->default('0');
            // $table->unsignedInteger('comment_id');         
            $table->timestamps();
        });

        // propiedades digitales tiene 11 categorias
        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 1;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 1;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 2;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 2;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 3;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 3;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 4;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 4;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 5;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 5;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 6;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 6;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 7;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 7;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 8;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 8;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 9;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 9;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 10;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 10;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 11;
         // compra es 4 venta es 5
        $post->type_id = 4;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 11;
        $post->type_id = 5;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        // Servicios son 29
        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 12;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 12;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 13;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 13;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 14;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 14;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 15;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 15;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 16;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 16;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 17;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 17;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 18;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 18;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 19;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 19;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 20;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 20;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 21;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 21;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 22;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 22;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 23;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 23;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 24;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 24;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 25;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 25;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 26;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 26;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 27;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 27;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 28;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 28;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 29;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 29;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 30;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 30;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 31;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 31;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 32;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 32;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 33;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 33;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 34;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 34;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 35;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 35;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 36;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 36;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 37;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 37;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 38;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 38;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 39;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 39;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        //categoria ejemplo dominios
        $post->maincategory_id = 40;
         // compra es 4 venta es 5
        $post->type_id = 1;
        // Premium 1 Free es 2
        $post->site_id = 1;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();

        $post = new Post;
        $post->post_name = 'negocio uno';
        $post->url_name = 'negocio-uno';
        $post->post_content = '<h1>Negocio de Ejemplo</h1><br><p>Detalla cada uno de los requisitos</p><br><p>Evita comunicarte en plataformas externas</p><br><p>Investiga la reputacion del cliente o freelance</p><br><p>Toma de ejemplos los tutoriales en youtube</p><br><p>Procura negociar con clientes o freelance que muestren una imagen real de su persona o de su marca</p><br><p>Solo califica cuando estes seguro y se pueden apelar luego de finalizadas</p>';
        $post->maincategory_id = 40;
        $post->type_id = 2;
        $post->site_id = 2;
        $post->price = 10;
        $post->comition_id = 1;
        $post->payment_id = 1;
        $post->revition_id = 1;                      
        $post->save();






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
