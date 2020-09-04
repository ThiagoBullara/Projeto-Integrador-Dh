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

        $resultado = $novaExperiencia->save();

        return view("CadastroDeExperiencia", ['resultado'=>$resultado]);
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
