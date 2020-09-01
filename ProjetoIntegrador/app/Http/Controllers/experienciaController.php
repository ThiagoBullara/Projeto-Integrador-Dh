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
        $novaExperiencia->nome = $request->nomeExperiencia;
        $novaExperiencia->preco = $request->precoExperiencia;
        $novaExperiencia->quantidade_pessoas = $request->quantidadePessoasExperiencia;
        $novaExperiencia->descricao = $request->descricaoExperiencia;
        $novaExperiencia->foto = $nomeDaFoto = $request->file('fotoExperiencia')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia')->storeAs("public/img",$nomeDaFoto);
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

        // $this->validate($request,[
        //     'nomeExperiencia' => 'required',
        //     'precoExperiencia' => 'required',
        //     'quantidadePessoasExperiencia' => 'required',
        //     'descricaoExperiencia' => 'required',
        //     'fotoExperiencia' => 'required',
        // ]);

        $editarExperiencia = experienciaModel::find($id_experiencia);

        $editarExperiencia->nome = $request->post('nomeExperiencia');
        $editarExperiencia->preco = $request->post('precoExperiencia');
        $editarExperiencia->quantidade_pessoas = $request->post('quantidadePessoasExperiencia');
        $editarExperiencia->descricao = $request->post('descricaoExperiencia');
        $editarExperiencia->foto = $nomeDaFoto = $request->file('fotoExperiencia')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $resultado = $editarExperiencia->save();

        return redirect()->action("experienciaController@listarExperiencias");
    }


}
