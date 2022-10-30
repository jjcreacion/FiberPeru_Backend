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
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50)->nullable();//No puede ser nulo
            $table->string('apellido',50)->nullable();//No puede ser nulo
            $table->integer('tipo_documento');
            $table->integer('num_documento');
            $table->string('telefono',50);
            $table->string('email',50);
            $table->string('direccion',100);
            $table->string('img1',100);
            $table->string('img2',100);
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
        Schema::dropIfExists('tecnicos');
    }
};
