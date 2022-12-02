<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('apm', 50);
            $table->date('fecha');
            $table->text('direccion');
            $table->Biginteger('telefono1');
            $table->Biginteger('telefono2');
            $table->text('email');
            $table->string('pass', 18);
            $table->integer('id_tipousuario');
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
        Schema::dropIfExists('tb_usuarios');
    }
}
