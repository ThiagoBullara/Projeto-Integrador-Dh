<?php

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

Route::get('/EditarExperiencia/{id}', 'experienciaController@editarExperiencia')->middleware('admin');
Route::post('/EditarExperiencia/{id}', 'experienciaController@editarExperiencia')->middleware('admin');

Route::get('/DeletarExperiencia/{id}', 'experienciaController@deletarExperiencia')->middleware('admin');
//CRUD de Experiências --------------------------------------------------------------------

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

//CRUD de Carrinho --------------------------------------------------------------------

//CRUD de Usuário --------------------------------------------------------------------
Auth::routes(['verify' => true]);

Route::get('/PaginaDePerfil/', 'usuarioController@exibirPerfil');

Route::get('/EditarPerfil/', 'usuarioController@editarPerfil');
Route::post('/EditarPerfil/', 'usuarioController@editarPerfil');

Route::get('/DeletarPerfil/', 'usuarioController@deletarPerfil');
//CRUD de Usuário --------------------------------------------------------------------

