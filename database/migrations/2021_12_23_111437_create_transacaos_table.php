<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->id();

            $table->integer("tipo");
            $table->date("data");
            $table->double("valor");
            $table->string("bi");
            $table->integer("cartao");
            $table->time("hora");
            $table->string("dono_loja");
            $table->string("nome_loja");

            $table->integer('it_estado')->default(1);
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
        Schema::dropIfExists('transacaos');
    }
}
