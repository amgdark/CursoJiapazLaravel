<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',75);
            $table->string('apellido_pat',75);
            $table->string('apellido_mat',75);
            $table->string('especialidad',150);
            $table->string('telefono',12);
            $table->string('celular',12);
            $table->smallInteger('edad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
