<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre', 100);
            $table->string('apellido',100);
            $table->string('cedula',20);
            $table->string('edad',10);
            $table->string('sexo',10);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
