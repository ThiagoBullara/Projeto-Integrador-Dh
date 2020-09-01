<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/Home');
});

Route::get('/Area-de-Atendimento', 'pageController@exibirAreaQueAtendemos');

Route::get('/CadastroDeExperiencia', 'experienciasController@cadastrarExperiencia');
Route::post('/CadastroDeExperiencia', 'experienciasController@cadastrarExperiencia');

Route::get('/ListaDeExperiencias', 'experienciasController@listarExperiencias');

Route::get('/Experiencia/{id}', 'experienciasController@detalhesExperiencia');

Route::get('/DeletarExperiencia/{id}', 'experienciasController@deletarExperiencia');

Route::get('/EditarExperiencia/{id}', 'experienciasController@editarExperiencia');
Route::post('/editarExperiencia/{id}', 'experienciasController@editarExperiencia');


Route::get('/Restaurantes', 'restauranteController@listarRestaurante');

Route::get('/Restaurante/{nomeRestaurante}/{id}', 'restauranteController@paginaRestaurante');

Route::get('/CadastroDeParceiro', 'restauranteController@cadastrarParceiro');
Route::post('/CadastroDeParceiro', 'restauranteController@cadastrarParceiro');


Route::get('/CadastroUsuario', 'pageController@exibirCadastroUsuario');

Route::get('/Careers', 'pageController@exibirCareers');

Route::get('/Contato', 'pageController@exibirContato');

Route::get('/FAQ', 'pageController@exibirFAQ');

Route::get('/Pagamento', 'pageController@exibirPaginaDePagamento');

Route::get('/SobreNos', 'pageController@exibirPaginaSobreNos');

Route::get('/PoliticaDePrivacidade', 'pageController@exibirPoliticaDePrivacidade');

Route::get('/TermosDeUso', 'pageController@exibirTermosDeUso');

Route::get('/Home', 'pageController@exibirHome');

Route::get('/Layout', 'pageController@layout');

Route::get('/EditarPerfilRestaurante', 'pageController@exibirEditarPerfilRestaurante');