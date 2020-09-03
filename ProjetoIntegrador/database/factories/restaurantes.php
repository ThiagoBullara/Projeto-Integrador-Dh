<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\restaurantesModel;
use Faker\Generator as Faker;

$factory -> define(restaurantesModel::class, function (Faker $faker) {
    return [

        "nomeProprietario" => $faker -> name,
        "nomeRestaurante" => $faker -> word,
        "fotoBanner" => $faker -> word."jpg",
        "descricao" => $faker -> paragraph(10),
        "descricaoCardapio" => $faker -> paragraph(10),
        "foto" => $faker -> word."jpg",
        "endereco" => $faker -> address,
        "email" => $faker -> unique() -> safeEmail,
        "senha" => $faker -> word,
        "telefone" => $faker -> e164PhoneNumber,
        "cnpj" => $faker -> randomDigit(12),
        "funcionamento" => $faker -> numberBetween(0, 8)

    ];
});
