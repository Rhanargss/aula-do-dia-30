<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('dataDeInicio');
            $table->string('dataDeTermino');
            $table->integer('idCliente')->unsigned()->nullable();
            $table->integer('idLivro')->unsigned()->nullable();
            $table->timestamps();
        });
        //Definição da Chave estrangeira para Cliente
        Schema::table('emprestimos', function (Blueprint $table) {
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('set null');
        });
        
        //Definição da Chave estrangeira para Livro
        Schema::table('emprestimos', function (Blueprint $table) {
            $table->foreign('idLivro')->references('id')->on('livros')->onDelete('set null');
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
