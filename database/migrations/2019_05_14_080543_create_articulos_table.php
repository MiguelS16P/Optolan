<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('refpro');
            $table->integer('clapro');
            $table->decimal('pvp1',8,2);
            $table->decimal('pvp2',8,2);
            $table->decimal('pvp1iva',8,2);
            $table->decimal('pvp2iva',8,2);
            $table->integer('tiva');
            $table->decimal('prulcom',8,2);
            $table->integer('clafam');
            $table->string('escandallo');
            $table->string('baja');
            $table->decimal('pvpoferta',8,2);
            $table->string('oferta')->nullable();;
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('articulos');
    }
}
