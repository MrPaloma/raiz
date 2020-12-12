<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('DNI', 11)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100)->nullable();
            $table->string('foto', 200)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('celular', 15)->nullable();
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
        Schema::dropIfExists('admins');
    }
}
