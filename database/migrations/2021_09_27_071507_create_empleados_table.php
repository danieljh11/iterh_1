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
            $table->integer("id")->unique();
            $table->string("nombre");
            $table->string("appat");
            $table->string("apmat");
            $table->string("fechanac");
            $table->string("curp");
            $table->string("rfc");
            $table->string("ine");
            $table->string("correo");
            $table->integer("telefono");
            $table->string("tipoemple");
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
