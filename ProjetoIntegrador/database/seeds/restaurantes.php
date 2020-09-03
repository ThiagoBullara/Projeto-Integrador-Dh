<?php

use Illuminate\Database\Seeder;
use App\restaurantesModel;

class restaurantes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $restaurante = new restaurantesModel();
        $restaurante -> nomeProprietario = "Thiago";
        $restaurante -> nomeRestaurante = "Thiago Sucos";
        $restaurante -> fotoBanner = "bandeiraCorinthias.png";
        $restaurante -> descricao = "Pão";
        $restaurante -> descricaoCardapio = "Sucos";
        $restaurante -> foto = "bandeiraCorinthias.png";
        $restaurante -> endereco = "Casa do chapéu";
        $restaurante -> email = "thiagosucos@gmail.com";
        $restaurante -> senha = "sucos";
        $restaurante -> telefone = "111111111111";
        $restaurante -> cnpj = "111111111111";
        $restaurante -> funcionamento = "Só abre na terça";

        $restaurante -> save();

        factory(restaurantesModel::class, 20) -> create();

    }
}
