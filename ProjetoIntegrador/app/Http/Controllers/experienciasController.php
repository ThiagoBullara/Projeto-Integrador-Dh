<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\experienciasModel;

class experienciasController extends Controller
{
    //
    public function cadastrarExperiencia(Request $request){
        if($request->isMethod('GET')){
            return view('CadastroDeExperiencia');
        }
        $novaExperiencia = new experienciasModel();
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
        $experiencia = experienciasModel::paginate(15);

        return view('ListaDeExperiencias',["experiencia" => $experiencia]);
    }

    public function detalhesExperiencia($id){
        $detalhesExperiencia = experienciasModel::find($id);

        return view('PaginaDeExperiencia', ["detalhesExperiencia" =>$detalhesExperiencia]);
    }

    public function deletarExperiencia($id){
        $deletarExperiencia = experienciasModel::find($id);
        $deletarExperiencia->delete();

        return redirect()->action("experienciasController@listarExperiencias");
    }

    public function editarExperiencia(Request $request, $id){
        if($request->isMethod('GET')){
            $editarExperiencia = experienciasModel::find($id);
            return view('EdicaoDeExperiencia', ["editarExperiencia" => $editarExperiencia]);
        }

        // $this->validate($request,[
        //     'nomeExperiencia' => 'required',
        //     'precoExperiencia' => 'required',
        //     'quantidadePessoasExperiencia' => 'required',
        //     'descricaoExperiencia' => 'required',
        //     'fotoExperiencia' => 'required',
        // ]);

        $editarExperiencia = experienciasModel::find($id);

        $editarExperiencia->nome = $request->post('nomeExperiencia');
        $editarExperiencia->preco = $request->post('precoExperiencia');
        $editarExperiencia->quantidade_pessoas = $request->post('quantidadePessoasExperiencia');
        $editarExperiencia->descricao = $request->post('descricaoExperiencia');
        $editarExperiencia->foto = $nomeDaFoto = $request->file('fotoExperiencia')->getClientOriginalName();
        $salvarFoto = $request->file('fotoExperiencia')->storeAs("public/img",$nomeDaFoto);
        $urlBase = 'storage/img/'.$nomeDaFoto;

        $resultado = $editarExperiencia->save();

        return redirect()->action("experienciasController@listarExperiencias");
    }


}
