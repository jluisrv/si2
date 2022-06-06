<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_ventas', function (Blueprint $table) {
            $table->id();
            $table->integer("codigo");
            $table->string("categoria");
            $table->string("producto");
            $table->integer("cantidad");
            $table->date("fecha_venta");
            $table->integer("total_venta");
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
        Schema::dropIfExists('reporte_ventas');
    }
};
