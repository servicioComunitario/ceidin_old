<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id_persona')->unsigned();
            $table->text('usuario')->unique();
            $table->text('password');
            $table->text('correo')->unique();
            $table->integer('id_estatus')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_persona')
            ->references('id')->on('persona')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_estatus')
            ->references('id')->on('estatus')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
