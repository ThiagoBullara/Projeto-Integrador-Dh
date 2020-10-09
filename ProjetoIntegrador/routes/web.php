<?php

use App\Http\Controllers\carrinhoController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\comentariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contatoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home
Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('home');
// Home

//CRUD de Experiências --------------------------------------------------------------------
Route::get('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia')->middleware('admin');
Route::post('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia')->middleware('admin');
Route::get('/EditarExperiencia/{id_experiencia}', 'experienciaController@editarExperiencia')->middleware('admin');
Route::post('/EditarExperiencia/{id_experiencia}', 'experienciaController@editarExperiencia')->middleware('admin');
Route::get('/DeletarExperiencia/{id_experiencia}', 'experienciaController@deletarExperiencia')->middleware('admin');
//CRUD de Experiências --------------------------------------------------------------------

// Lista de mensagens
Route::get('/FormularioContato', 'contatoController@enviarContato');
Route::post('/FormularioContato', 'contatoController@enviarContato');
Route::get('/MensagensDosUsuarios', 'contatoController@listarContatos')->middleware('admin');
Route::get('/filtrarMensagens', 'contatoController@filtrarContatos')->middleware('admin');
Route::post('/EnviarEmail', 'contatoController@enviarEmail')->middleware('admin');
// Lista de mensagens



Route::post('/Feedback', 'experienciaController@feedback')->middleware('auth');

Route::get('/ListaDeExperiencias', 'experienciaController@listarExperiencias');

Route::get('/ListaDeExperienciasBuscar', 'experienciaController@buscar');

Route::get('/ListaDeExperienciasBuscarTag', 'experienciaController@buscartag');

Route::get('/Experiencia/{id_experiencia}', 'experienciaController@detalhesExperiencia');

Route::get('/Area-de-Atendimento', 'pageController@exibirAreaQueAtendemos');

Route::get('/Careers', 'pageController@exibirCareers');

Route::get('/Contato', 'pageController@exibirContato');

Route::get('/FAQ', 'pageController@exibirFAQ');

Route::get('/SobreNos', 'pageController@exibirPaginaSobreNos');

Route::get('/PoliticaDePrivacidade', 'pageController@exibirPoliticaDePrivacidade');

Route::get('/TermosDeUso', 'pageController@exibirTermosDeUso');



// Comentarios
Route::post('/EnviarComentario/{id_experiencia}', 'comentariosController@postar');
Route::post('/EditarComentario/{id_comentario}', 'comentariosController@editar');
Route::post('/DeletarComentario/{id_comentario}', 'comentariosController@deletar');
// Comentarios

//CRUD de Carrinho --------------------------------------------------------------------
Route::get('/AdicionarAoCarrinho/{id_experiencia}', 'carrinhoController@adicionarCarrinho')->name('carrinho.adicionar')->middleware('auth');
Route::get('/Carrinho', 'carrinhoController@exibirCarrinho')->name('carrinho.exibir')->middleware('auth');
Route::get('/Carrinho/Deletar/{itemId}', 'carrinhoController@deletarCarrinho')->name('carrinho.removerProduto')->middleware('auth');
Route::get('/Carrinho/Editar/{rowId}', 'carrinhoController@editarCarrinho')->name('carrinho.editar')->middleware('auth');
Route::get('/Pagamento', 'carrinhoController@exibirCarrinhoCheckout')->middleware('auth');
Route::get('/CompraAutorizada', 'pageController@exibirCompraAutorizada')->middleware('auth');;
Route::get('/Checkout', 'carrinhoController@checkout')->middleware('auth');;
Route::get('/AtivarExperiencia', 'carrinhoController@ativarCompra')->middleware('auth');
Route::get('/ExperienciaAtivada', 'carrinhoController@compraAtiva')->middleware('auth');
//CRUD de Carrinho --------------------------------------------------------------------

//CRUD de Usuário --------------------------------------------------------------------
Auth::routes(['verify' => true]);
Route::get('/PaginaDePerfil/', 'usuarioController@exibirPerfil')->middleware('auth');
Route::get('/EditarPerfil/', 'usuarioController@editarPerfil')->middleware('auth');
Route::post('/EditarPerfil/', 'usuarioController@editarPerfil')->middleware('auth');
Route::get('/DeletarPerfil/', 'usuarioController@deletarPerfil')->middleware('auth');
//CRUD de Usuário --------------------------------------------------------------------

Route::get('/Layout', 'pageController@layout');



