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
    return view('welcome');
});

Route::get('/Area-de-Atendimento', 'pageController@exibirAreaQueAtendemos');

Route::get('/CadastroDeExperiencia', 'pageController@exibirCadastroDeExperiencia');

Route::get('/CadastroDeParceiro', 'pageController@exibirCadastroDeParceiro');

Route::get('/CadastroUsuario', 'pageController@exibirCadastroUsuario');

Route::get('/Careers', 'pageController@exibirCareers');

Route::get('/Contato', 'pageController@exibirContato');

Route::get('/FAQ', 'pageController@exibirFAQ');

Route::get('/Restaurantes', 'pageController@exibirListaDeRestaurantes');

Route::get('/Experiencia', 'pageController@exibirPaginaDeExperiencia');

Route::get('/Pagamento', 'pageController@exibirPaginaDePagamento');

Route::get('/Restaurante', 'pageController@exibirPaginaDeRestaurante');

Route::get('/SobreNos', 'pageController@exibirPaginaSobreNos');

Route::get('/PoliticaDePrivacidade', 'pageController@exibirPoliticaDePrivacidade');

Route::get('/TermosDeUso', 'pageController@exibirTermosDeUso');

Route::get('/Home', 'pageController@exibirHome');
