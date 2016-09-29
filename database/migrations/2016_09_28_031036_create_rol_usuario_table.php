<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_usuario', function (Blueprint $table) {
            
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_rol')->unsigned();

            $table->primary(['id_usuario', 'id_rol']);

            $table->foreign('id_usuario')
            ->references('id_persona')->on('usuario')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_rol')
            ->references('id')->on('rol')
            ->onUpdate('cascade')
            ->onDelete('restrict');

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
        Schema::dropIfExists('rol_usuario');
    }
}
