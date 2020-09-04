<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\experienciaModel;

class experienciaController extends Controller
{
    //
    public function cadastrarExperiencia(Request $request){
        if($request->isMethod('GET')){
            return view('CadastroDeExperiencia');
        }

        $validatedRules = [
            'nomeExperiencia' => 'required|max:255',
            'precoExperiencia' => 'required|numeric',
            'quantidadePessoasExperiencia' => 'required|numeric',
            'descricaoExperiencia' => 'required|max:255',
            'sobreExperiencia' => 'required|max:800',
            'funcionamento' => 'required|max:255',
            'sobreRestaurante' => 'required|max:800',
            'fotoExperiencia1' => 'required|image',
            'fotoExperiencia2' => 'required|image',
            'fotoExperiencia3' => 'required|image',
            'logoRestaurante' => 'required|image'
        ];

        $validatedMessage = [
            'required' => 'Esse campo é obrigatório',
            'max' => 'Esse campo possui muita informação',
            'numeric' => 'Esse campo deve ser um número',
            'image' => 'O formato desse arquivo não é válido'
        ];

        $this -> validate($request, $validatedRules, $validatedMessage);

        $novaExperiencia = new experienciaModel();
        $novaExperiencia->nomeExperiencia = $request->nomeExperiencia;
        $novaExperiencia->precoExperiencia = $request->precoExperiencia;
        $novaExperiencia->quantidadePessoasExperiencia = $request->quantidadePessoasExperiencia;
        $novaExperiencia->descricaoExperiencia = $request->descricaoExperiencia;
        $novaExperiencia->sobreExperiencia = $request->sobreExperiencia;
        $novaExperiencia->funcionamento = $request->funcionamento;
        $novaExperiencia->sobreRestaurante = $request->sobreRestaurante;

        $novaExperiencia->fotoExperiencia1 = $nomeDaFoto = $request->file('fotoExperiencia1')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia1')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;
        
        $novaExperiencia->fotoExperiencia2 = $nomeDaFoto = $request->file('fotoExperiencia2')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia2')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;
        
        $novaExperiencia->fotoExperiencia3 = $nomeDaFoto = $request->file('fotoExperiencia3')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia3')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;
    
        $novaExperiencia->logoRestaurante = $nomeDaFoto = $request->file('logoRestaurante')->getClientOriginalName();
        $salvarFoto = $request->file('logoRestaurante')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $novaExperiencia->tag1 = $request->tag1;
        $novaExperiencia->tag2 = $request->tag2;
        $novaExperiencia->tag3 = $request->tag3;
        $novaExperiencia->tag4 = $request->tag4;

        $resultado = $novaExperiencia->save();

        $vac = compact('resultado');

        return view("CadastroDeExperiencia", $vac);
    }

    public function listarExperiencias(){
        $experiencia = experienciaModel::paginate(15);

        return view('ListaDeExperiencias',["experiencia" => $experiencia]);
    }

    public function detalhesExperiencia($id_experiencia){
        $detalhesExperiencia = experienciaModel::find($id_experiencia);

        return view('PaginaDeExperiencia', ["detalhesExperiencia" =>$detalhesExperiencia]);
    }

    public function deletarExperiencia($id_experiencia){
        $deletarExperiencia = experienciaModel::find($id_experiencia);
        $deletarExperiencia->delete();

        return redirect()->action("experienciaController@listarExperiencias");
    }

    public function editarExperiencia(Request $request, $id_experiencia){
        if($request->isMethod('GET')){
            $editarExperiencia = experienciaModel::find($id_experiencia);
            return view('EdicaoDeExperiencia', ["editarExperiencia" => $editarExperiencia]);
        }

        $editarExperiencia = experienciaModel::find($id_experiencia);

        $editarExperiencia->nomeExperiencia = $request->post('nomeExperiencia');
        $editarExperiencia->precoExperiencia = $request->post('precoExperiencia');
        $editarExperiencia->quantidadePessoasExperiencia = $request->post('quantidadePessoasExperiencia');
        $editarExperiencia->descricaoExperiencia = $request->post('descricaoExperiencia');
        $editarExperiencia->sobreExperiencia = $request->post('sobreExperiencia');
        $editarExperiencia->funcionamento = $request->post('funcionamento');
        $editarExperiencia->sobreRestaurante = $request->post('sobreRestaurante');

        $editarExperiencia->fotoExperiencia1 = $nomeDaFoto = $request->file('fotoExperiencia1')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia1')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $editarExperiencia->fotoExperiencia2 = $nomeDaFoto = $request->file('fotoExperiencia2')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia2')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $editarExperiencia->fotoExperiencia3 = $nomeDaFoto = $request->file('fotoExperiencia3')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia3')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;


        $editarExperiencia->logoRestaurante = $nomeDaFoto = $request->file('logoRestaurante')->getClientOriginalName();
        $salvarFoto = $request->file('logoRestaurante')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $resultado = $editarExperiencia->save();

        return redirect()->action("experienciaController@listarExperiencias");
    }


}
