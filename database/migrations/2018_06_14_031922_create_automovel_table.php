<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovel', function (Blueprint $table) {
            $table->increments('id');
			$table->string('marca',80);
			$table->string('modelo', 80);
			$table->string('ano', 8);
			$table->string('placa', 16);
			$table->string('capacidade', 6);
			
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
        Schema::dropIfExists('automovel');
    }
}
