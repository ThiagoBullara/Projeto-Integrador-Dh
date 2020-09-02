<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->bigIncrements('id_restaurante');
            $table->string('nomeProprietario');
            $table->string('nomeRestaurante');
            $table->longText('descricao');
            $table->longText('descricaoCardapio');
            $table->string('funcionamento') -> nullable();
            $table->string('email');
            $table->string('senha');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('cnpj') -> nullable();
            $table->string('foto');
            $table->string('fotoBanner');
            $table->timestamps();

            // $table->foreign('id_restaurante')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}
