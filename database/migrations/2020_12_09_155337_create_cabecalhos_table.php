<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabecalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabecalhos', function (Blueprint $table) {
            $table->id();
            $table->string('vc_ensignia', 255);
            $table->string('vc_logo', 255);
            $table->string('vc_logo_vectorizado', 255)->default('images\vectorizado\logo.png');
            $table->string('vc_escola', 255);
            $table->string('vc_acronimo', 255);
            $table->string('vc_nif', 255);
            $table->string('vc_republica', 255);
            $table->string('vc_ministerio', 255);
            $table->string('vc_endereco', 255);
            $table->integer('it_telefone');
            $table->string('vc_email', 255);
            $table->string('vc_nomeDirector', 255);
            $table->string('vc_nomeSubdirectorPedagogico', 255);
            $table->string('vc_nomeSubdirectorAdminFinanceiro', 255);
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
        Schema::dropIfExists('cabecalhos');
    }
}
