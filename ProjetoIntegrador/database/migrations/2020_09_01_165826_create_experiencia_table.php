<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia', function (Blueprint $table) {
            $table->bigIncrements('id_experiencia');
            $table->string('nomeExperiencia');
            $table->longText('sobreExperiencia');
            $table->longText('sobreRestaurante');
            $table->string('descricaoExperiencia');
            $table->string('fotoExperiencia1');
            $table->string('fotoExperiencia2');
            $table->string('fotoExperiencia3');
            $table->string('logoRestaurante');
            $table->decimal('precoExperiencia');
            $table->integer('quantidadePessoasExperiencia');
            $table->string('funcionamento')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('experiencia');
    }
}
