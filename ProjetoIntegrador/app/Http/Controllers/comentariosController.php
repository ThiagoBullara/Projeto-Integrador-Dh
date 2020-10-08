<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentariosModel;
use Illuminate\Support\Facades\Auth;

class comentariosController extends Controller
{
    public function postar(Request $request) {

        $validatedRules = [
            'comentario' => 'required|max:800'
        ];

        $validatedMessage = [
            'required' => 'Esse campo é obrigatório',
            'max' => 'Esse campo está muito longo'
        ];

        $this -> validate($request, $validatedRules, $validatedMessage);

        $novoComentario = new comentariosModel();
        $novoComentario->comentario = $request->comentario;
        $novoComentario->id_experiencia = $request->id_experiencia;
        $novoComentario->id_usuario = Auth::user()->id;
        $novoComentario->nome_usuario = Auth::user()->name;
        $novoComentario->fotoPerfil = Auth::user()->fotoPerfil;

        $id_experiencia = $request->id_experiencia;
        $comentarioSalvo = $novoComentario->save();

        return redirect()->action('experienciaController@detalhesExperiencia', $id_experiencia);
        
    }

    public function editar(Request $request, $id_comentario) {

        $validatedRules = [
            'comentario' => 'required|max:800'
        ];

        $validatedMessage = [
            'required' => 'Esse campo é obrigatório',
            'max' => 'Esse campo está muito longo'
        ];

        $this -> validate($request, $validatedRules, $validatedMessage);

        $id_comentario = $request->id_comentario;

        $editarComentario = comentariosModel::find($id_comentario);
        $editarComentario->comentario = $request->comentario;
        
        $id_experiencia = $request->id_experiencia;
        $comentarioSalvo = $editarComentario->save();

        return redirect()->action('experienciaController@detalhesExperiencia', $id_experiencia);
        
    }

    public function deletar(Request $request, $id_comentario) {

        $id_comentario = $request->id_comentario;
        $id_experiencia = $request->id_experiencia;
        
        $deletarComentario = comentariosModel::find($id_comentario);
        $deletarComentario->delete();

        return redirect()->action('experienciaController@detalhesExperiencia', $id_experiencia);

    }

}
