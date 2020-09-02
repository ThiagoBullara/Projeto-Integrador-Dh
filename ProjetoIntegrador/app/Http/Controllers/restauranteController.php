<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\restaurantesModel;

class restauranteController extends Controller
{
    public function listarRestaurante() {
        $restaurantes = restaurantesModel::all();

        // dd($restaurantes);

        $vac = compact('restaurantes');
    
        return view('ListaDeRestaurantes', $vac);
    }

    public function paginaRestaurante($nomeRestaurante, $id_restaurante) {
        $restaurante = restaurantesModel::find($id_restaurante);

        //dd($restaurante);  

        $vac = compact('restaurante');

        return view('PaginaDeRestaurante', $vac);
    }

    public function cadastrarParceiro(Request $request){
        if($request -> isMethod('GET')){
            return view('CadastroDeParceiro');
        }

        $novoRestaurante = new restaurantesModel();
        $novoRestaurante -> nomeProprietario = $request -> nomeProprietario;
        $novoRestaurante -> nomeRestaurante = $request -> nomeRestaurante;
        $novoRestaurante -> descricao = $request -> descricao;
        $novoRestaurante -> descricaoCardapio = $request -> descricaoCardapio;
        $novoRestaurante -> funcionamento = $request -> funcionamento;
        $novoRestaurante -> email = $request -> email;
        $novoRestaurante -> senha = $request -> password;
        $novoRestaurante -> endereco = $request -> endereco;
        $novoRestaurante -> telefone = $request -> telefone;
        $novoRestaurante -> cnpj = $request -> cnpj;

        $imagem = $request -> file('foto') -> getClientOriginalName();                
        $novoRestaurante -> foto = $imagem;                                                 
        $saveImagem = $request -> file('foto') -> storeAs("public/img", $imagem);

        $imagemBanner = $request -> file('fotoBanner') -> getClientOriginalName();                
        $novoRestaurante -> fotoBanner = $imagemBanner;                                                 
        $saveImagem = $request -> file('fotoBanner') -> storeAs("public/img", $imagemBanner);



        $resultado = $novoRestaurante -> save();

        $vac = compact('resultado');

        return view("/Home", $vac);
    }

    public function editarRestaurante(Request $request, $id_restaurante){
        if($request -> isMethod('GET')){
            return view('editarRestaurante');
        }

        $editarRestaurante = restaurantesModel::find($id_restaurante);

        $editarRestaurante -> nomeProprietario = $request -> nomeProprietario;
        $editarRestaurante -> nomeRestaurante = $request -> nomeRestaurante;
        $editarRestaurante -> descricao = $request -> descricao;
        $editarRestaurante -> descricaoCardapio = $request -> descricaoCardapio;
        $editarRestaurante -> cnpj = $request -> cnpj;
        $editarRestaurante -> endereco = $request -> endereco;
        $editarRestaurante -> telefone = $request -> telefone;
        $editarRestaurante -> email = $request -> email;
        $editarRestaurante -> senha = $request -> password;
        $editarRestaurante -> funcionamento = $request -> funcionamento;
        // $editarRestaurante -> foto = $foto = $request -> file('foto') -> getClientOriginalName();
        // $salvarFoto = $request -> file('foto') -> storeAs("public/imgRestaurantes", $foto);
        // $urlBase = 'storage/imgRestaurantes/'.$foto;
        // $editarRestaurante -> fotoBanner = $fotoBanner = $request -> file('fotoBanner') -> getClientOriginalName();
        // $salvarFoto = $request -> file('fotoBanner') -> storeAs("public/imgRestaurantes", $fotoBanner);
        // $urlBase = 'storage/imgRestaurantes/'.$fotoBanner;


        $resultado = $editarRestaurante -> save();

        // $vac = compact('resultado');

        return view("/Home");
    }

    public function deletarRestaurante($id_restaurante) {
        $restaurante = restaurantesModel::find($id_restaurante);

        $restaurante -> delete();

        return redirect() -> action('restauranteController@cadastrarParceiro');
    }
}