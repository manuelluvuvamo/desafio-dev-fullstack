<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->foreignId('current_team_id')->nullable();
        //     $table->text('profile_photo_path')->nullable();
        //     $table->timestamps();
        // });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nomeUtilizador');
            $table->string('vc_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('vc_tipoUtilizador')->default('aluno');
            $table->string('vc_telefone');
            $table->string('vc_genero');          
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();

            $table->unsignedBigInteger('it_estado_user')->enum('0','1')->default('1');
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
        Schema::dropIfExists('users');
    }
}
