<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->string("id");
            $table->string("id_empleado");
            $table->string("materia");
            $table->string("actividades");
            $table->integer("t_horas");
            $table->string("lunes");
            $table->string("martes");
            $table->string("miercoles");
            $table->string("jueves");
            $table->string("viernes");
            $table->string("sabado");
            
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
        Schema::dropIfExists('horarios');
    }
}
