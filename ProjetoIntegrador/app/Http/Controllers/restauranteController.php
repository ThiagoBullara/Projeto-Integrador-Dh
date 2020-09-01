<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\restauranteModel;

class restauranteController extends Controller
{
    public function listarRestaurante() {
        $restaurantes = restauranteModel::all();

        $vac = compact('restaurantes');
    
        return view('ListaDeRestaurantes', $vac);
    }

    public function paginaRestaurante($nomeRestaurante, $id) {
        $restaurante = restauranteModel::find($id);

        $vac = compact('restaurante');

        return view('PaginaDeRestaurante', $vac);
    }

















    public function cadastrarParceiro(Request $request){
        if($request -> isMethod('GET')){
            return view('CadastroDeParceiro');
        }

        $novoRestaurante = new restauranteModel();
        $novoRestaurante -> nomeProprietario = $request -> nomeProprietario;
        $novoRestaurante -> nomeRestaurante = $request -> nomeRestaurante;
        $novoRestaurante -> descricao = $request -> descricao;
        $novoRestaurante -> descricaoCardapio = $request -> descricaoCardapio;
        $novoRestaurante -> cnpj = $request -> cnpj;
        $novoRestaurante -> endereco = $request -> endereco;
        $novoRestaurante -> telefone = $request -> telefone;
        $novoRestaurante -> email = $request -> email;
        $novoRestaurante -> senha = $request -> password;
        $novoRestaurante -> funcionamento = $request -> funcionamento;
        $novoRestaurante -> foto = $foto = $request -> file('foto') -> getClientOriginalName();
        $salvarFoto = $request -> file('foto') -> storeAs("public/imgRestaurantes", $foto);
        $urlBase = 'storage/imgRestaurantes/'.$foto;
        $novoRestaurante -> fotoBanner = $fotoBanner = $request -> file('fotoBanner') -> getClientOriginalName();
        $salvarFoto = $request -> file('fotoBanner') -> storeAs("public/imgRestaurantes", $fotoBanner);
        $urlBase = 'storage/imgRestaurantes/'.$fotoBanner;


        $resultado = $novoRestaurante -> save();

        // $vac = compact('resultado');

        return view("/Home");
    }
}
