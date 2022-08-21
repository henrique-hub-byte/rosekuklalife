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
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('nome_produto');
            $table->float('preco');
            $table->float('promocao');
            $table->text('descricao');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_sub_categoria')->unsigned();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_sub_categoria')->references('id_sub_categoria')->on('sub_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
