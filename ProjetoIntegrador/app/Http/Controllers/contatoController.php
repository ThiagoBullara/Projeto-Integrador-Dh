<?php

namespace App\Http\Controllers;

use App\contatoModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contatoController extends Controller
{
    public function enviarContato (Request $request) {
        if($request->isMethod('GET')){
            return view('PaginaSobreNos');
        }

        \Mail::send('emailContato',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message'),
            ), function($message) use ($request)
          {
            $message->from($request->email);
            $message->to('buyhoodlocalfoods@gmail.com', 'BuyHood')->subject('Nova Mensagem de Contato');
          });

        $validatedRules = [
            'name' => 'required|max:255',
            'email' => 'email:rfc,dns',
            'subject' => 'required|max:255',
            'message' => 'required|max:2000'
        ];

        $validatedMessage = [
            'required' => 'Esse campo é obrigatório',
            'max' => 'Esse campo está muito longo',
            'email' => 'Endereço de e-mail inválido'
        ];

        $this -> validate($request, $validatedRules, $validatedMessage);

        $novoContato = new contatoModel();
        $novoContato->id_usuario = Auth::user()->id;
        $novoContato->name = $request->name;
        $novoContato->email = $request->email;
        $novoContato->subject = $request->subject;
        $novoContato->message = $request->message;

        $salvarContato = $novoContato->save();

        $vac = compact('salvarContato');

        return view ("PaginaSobreNos", $vac);
    }

    public function listarContatos (Request $request) {

        $mensagens = contatoModel::all();

        $vac = compact('mensagens');

        return view ("MensagensDosUsuarios", $vac);
    }

    public function filtrarContatos (Request $request) {
        if($request->get('tipo') != 'todas'){

            $mensagens = contatoModel::where('subject', 'LIKE', '%'.$request->get('tipo').'%')->get();
            
            $vac = compact('mensagens');

            return view ("MensagensDosUsuarios", $vac);

        } else {
            $mensagens = contatoModel::all();

            $vac = compact('mensagens');

            return view ("MensagensDosUsuarios", $vac);
        }
    }

    public function enviarEmail (Request $request) {

        $email = $request->email_usuario;
        $nome = $request->nome_usuario;
        $message_usuario = $request->message_usuario;

        $data = [
            'message' => $request->menssage_for_user,
            'email' => $request->email_usuario,
            'nome' => $request->nome_usuario,
            'message_usuario' => $request->message_usuario,
        ];

        \Mail::send('emailResponder', $data, function($message) use ($request)
            {
            $message->from('buyhoodlocalfoods@gmail.com');
            $message->to($request->email_usuario, "Usuário BuyHood")->subject('Nova Mensagem de Contato');
          });

          return back();

    }


}
