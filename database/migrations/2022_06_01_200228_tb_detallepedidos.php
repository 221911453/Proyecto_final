<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbDetallepedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detallepedidos', function (Blueprint $table) {
            $table->id();
            $table->Biginteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('tb_productos');
            $table->Biginteger('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('id')->on('tb_pedidos');
            $table->integer('cantidad');
            $table->float('total', 50);
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
        Schema::dropIfExists('tb_detallepedidos');
    }
}
