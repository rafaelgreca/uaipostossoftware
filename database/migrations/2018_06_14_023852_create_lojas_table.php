<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome',200);
			$table->string('telefoneContato', 30);
			$table->string('cidade',100);
			$table->string('estado');
			$table->string('bairro',80);
			$table->string('rua',300);
			$table->string('numero',20);
			$table->string('complemento',400)->nullable($value = true);
			$table->string('24horas');
			$table->string('horarioabertura');
			$table->string('horariofechamento');
			$table->string('cartao');
			
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
        Schema::dropIfExists('lojas');
    }
}
