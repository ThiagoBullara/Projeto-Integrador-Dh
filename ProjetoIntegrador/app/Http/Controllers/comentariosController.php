<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentariosModel;

class comentariosController extends Controller
{
    public function postar(Request $request) {

        $novoComentario = new comentariosModel();
        $novoComentario->comentario = $request->comentario;

        $id_experiencia = $request->id_experiencia;
        $comentarioSalvo = $novoComentario->save();

        return redirect()->action('experienciaController@detalhesExperiencia', $id_experiencia);
        
    }
}
