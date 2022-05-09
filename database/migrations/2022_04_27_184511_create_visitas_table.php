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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->text('assunto');
            $table->date('data_entrada');
            $table->dateTime('hora_entrada');
            $table->date('data_saida');
            $table->dateTime('hora_saida');
            $table->softDeletes('deleted_at');
            $table->timestamps();

            // // Chave estrangeira da tabela origem
            $table->unsignedBigInteger('servidores_id');
            $table->unsignedBigInteger('visitantes_id');
            $table->unsignedBigInteger('orgaos_id');



            // // Campos relacionados a chave estrangeira da tabela origem
           $table->foreign('servidores_id')->references('id')->on('servidores');
           $table->foreign('visitantes_id')->references('id')->on('visitantes');
           $table->foreign('orgaos_id')->references('id')->on('orgaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
};
