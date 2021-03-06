<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nombre');            
            $table->string('descripcion');            
            $table->string('estado');
            $table->float('precio', 8, 2);    
            $table->foreignId('categoria_id')->constrained('categorias');  
            $table->foreignId('usuario_id')->constrained('users');  
            $table->foreignId('distribuidor_id')->constrained('distribuidors');   
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
        Schema::dropIfExists('productos');
    }
}
