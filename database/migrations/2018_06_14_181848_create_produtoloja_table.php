<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutolojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtoloja', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome',200);
			$table->string('codigo',20);
			$table->string('quantidade');
			$table->date('recebimento');
			$table->date('vencimento')->nullable($value = true);
			$table->string('preco');
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
        Schema::dropIfExists('produtoloja');
    }
}
