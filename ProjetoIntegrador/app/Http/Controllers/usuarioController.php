<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class usuarioController extends Controller{

    protected function validator(array $data)
    {
        return Validator::find($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fotoPerfil' => ['required','mimes:jpeg,jpg,bmp,png'],
        ]);
    }

    protected function editarPerfil(Request $request, $id){

        if($request->isMethod('GET')){
            $editarPerfil = User::find($id);
            return view('EditarPerfil', ["editarPerfil" => $editarPerfil]);
        }
            $user = User::find($id);
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $user->password = Hash::make($request->post('password'));
            

            if (request()->hasFile('fotoPerfil')){

                $fotoPerfil = request()->file('fotoPerfil')->getClientOriginalName();
                request()->file('fotoPerfil')->storeAs("public/img", $fotoPerfil);
                $user->update(['fotoPerfil'=> $fotoPerfil]);

            }

            return redirect()->action("pageController@exibirHome");

    }

    public function exibirPerfil($id){
        $detalhesPerfil = User::find($id);

        return view('PaginaDePerfil', ["detalhesPerfil" => $detalhesPerfil]);
    }

    public function deletarPerfil($id){
        $deletarPerfil = User::find($id);
        $deletarPerfil->delete();

        return redirect()->action("pageController@exibirHome");
    }
}


