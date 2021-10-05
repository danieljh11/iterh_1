<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancarios', function (Blueprint $table) {
            $table->string("id");
            $table->string("nombre_banco");
            $table->string("clave_bancaria");
            $table->integer("nocuenta");
            $table->integer("sucursal");
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
        Schema::dropIfExists('bancarios');
    }
}
