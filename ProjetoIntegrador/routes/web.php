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

<<<<<<< HEAD
=======
Route::get('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia');
Route::post('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia');
>>>>>>> 22dcdeb9df8e7394e91423f3379fe47aa7ec2e74

Route::get('/ListaDeExperiencias', 'experienciaController@listarExperiencias');

Route::get('/Experiencia/{id_experiencia}', 'experienciaController@detalhesExperiencia');

<<<<<<< HEAD
Route::get('/CadastroDeExperiencia', 'experienciasController@cadastrarExperiencia');
Route::post('/CadastroDeExperiencia', 'experienciasController@cadastrarExperiencia');
=======
Route::get('/DeletarExperiencia/{id}', 'experienciaController@deletarExperiencia');
>>>>>>> 22dcdeb9df8e7394e91423f3379fe47aa7ec2e74

Route::get('/EditarExperiencia/{id}', 'experienciaController@editarExperiencia');
Route::post('/editarExperiencia/{id}', 'experienciaController@editarExperiencia');

Route::get('/DeletarExperiencia/{id}', 'experienciasController@deletarExperiencia');

// Rotas de Restaurantes
Route::get('/Restaurantes', 'restauranteController@listarRestaurante');

Route::get('/Restaurante/{nomeRestaurante}/{id}', 'restauranteController@paginaRestaurante');

Route::get('/CadastroDeParceiro', 'restauranteController@cadastrarParceiro');
Route::post('/CadastroDeParceiro', 'restauranteController@cadastrarParceiro');

Route::get('/EditarRestaurante/{id}', 'restauranteController@editarRestaurante');
Route::post('/EditarRestaurante/{id}', 'restauranteController@editarRestaurante');

Route::get('/EditarRestaurante/{id}', 'restauranteController@deletarRestaurante');


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

