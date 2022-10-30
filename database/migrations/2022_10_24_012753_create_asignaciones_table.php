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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad')->nullable();

            $table->unsignedBigInteger('id_tecnicos');
            $table->foreign("id_tecnicos")
                ->references("id")
                ->on("tecnicos")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unsignedBigInteger('id_epps');
            $table->foreign("id_epps")
                ->references("id")
                ->on("epps")
                ->onDelete("cascade")
                ->onUpdate("cascade");
                   
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
        Schema::dropIfExists('asignaciones');
    }
};
