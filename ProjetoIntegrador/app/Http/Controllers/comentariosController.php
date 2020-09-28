<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentariosModel;
use Illuminate\Support\Facades\Auth;

class comentariosController extends Controller
{
    public function postar(Request $request) {

        $novoComentario = new comentariosModel();
        $novoComentario->comentario = $request->comentario;
        $novoComentario->id_experiencia = $request->id_experiencia;
        $novoComentario->nome_usuario = Auth::user()->name;
        $novoComentario->fotoPerfil = Auth::user()->fotoPerfil;


        $id_experiencia = $request->id_experiencia;
        $comentarioSalvo = $novoComentario->save();

        return redirect()->action('experienciaController@detalhesExperiencia', $id_experiencia);
        
    }
}
