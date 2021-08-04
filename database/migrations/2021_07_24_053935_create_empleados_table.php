<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('pnombre',45);
            $table->string('snombre',45)->nullable();
            $table->string('papellido',45);
            $table->string('sapellido',45)->nullable();
            $table->string('identidad',13)->unique();
            $table->string('telefono',8);
            $table->string('email', 100)->nullable()->unique();
            $table->string('direccion',255);
            $table->string('foto_url', 2048)->nullable();
            $table->boolean('estado');
            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('set null')->onUpdate('set null');
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
        Schema::dropIfExists('empleados');
    }
}
