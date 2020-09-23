<?php

use App\Http\Controllers\carrinhoController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\usuarioController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});


//CRUD de Experiências --------------------------------------------------------------------

Route::get('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia')->middleware('admin');
Route::post('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia')->middleware('admin');

Route::get('/EditarExperiencia/{id_experiencia}', 'experienciaController@editarExperiencia')->middleware('admin');
Route::post('/EditarExperiencia/{id_experiencia}', 'experienciaController@editarExperiencia')->middleware('admin');

Route::get('/DeletarExperiencia/{id_experiencia}', 'experienciaController@deletarExperiencia')->middleware('admin');
//CRUD de Experiências --------------------------------------------------------------------

Route::post('/FormularioContato', 'usuarioController@emailContato');

Route::get('/ListaDeExperiencias', 'experienciaController@listarExperiencias');

Route::get('/ListaDeExperienciasBuscar', 'experienciaController@buscar');

Route::get('/Experiencia/{id_experiencia}', 'experienciaController@detalhesExperiencia');

Route::get('/Area-de-Atendimento', 'pageController@exibirAreaQueAtendemos');

Route::get('/Careers', 'pageController@exibirCareers');

Route::get('/Contato', 'pageController@exibirContato');

Route::get('/FAQ', 'pageController@exibirFAQ');

Route::get('/SobreNos', 'pageController@exibirPaginaSobreNos');

Route::get('/PoliticaDePrivacidade', 'pageController@exibirPoliticaDePrivacidade');

Route::get('/TermosDeUso', 'pageController@exibirTermosDeUso');

Route::get('/home', 'pageController@exibirHome')->name('home');

Route::get('/Layout', 'pageController@layout');

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



