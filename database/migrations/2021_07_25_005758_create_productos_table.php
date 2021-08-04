<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
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
            $table->string('barcode', 45)->nullable();
            $table->string('descripcion',255);
            $table->smallInteger('stock',false,false);
            $table->smallInteger('min_stock',false,false);
            $table->smallInteger('max_stock',false,false);
            $table->float('precio');
            $table->string('ubicacion',255)->nullable();
            $table->string('foto',2048)->nullable();
            $table->unsignedBigInteger('tipo_producto_id')->nullable();
            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos')
            ->onDelete('set null')->onUpdate('set null');
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
