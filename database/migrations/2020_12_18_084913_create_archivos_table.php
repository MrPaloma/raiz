<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subdocumento_id')->index();
            $table->unsignedBigInteger('cliente_id')->index();
            $table->string('nombre');
            $table->string('month');
            $table->string('year');
            $table->string('path');
            $table->timestamps();

            // $table->foreign('cliente_id')->references('id')->on('clientes');
            // $table->foreign('subdocumento_id')->references('id')->on('subdocumentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos');
    }
}
