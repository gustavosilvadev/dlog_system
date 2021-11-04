<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;
use illuminate\Support\Facades\Redirect;

use App\Http\Controllers\AtendimentoController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

// Route::get('/{any}', function(){
    
//     return view('layouts.Home.home');

// })->where('any', '.*');


Route::get('/', function(){
    
    return view('layouts.Home.home');

})->where('any', '.*');

Route::get('/atendimentos', function(){

    return view('layouts.atendimento.listaAtendimento');
});

// Route::get('/lista_atendimentos',[AtendimentoController::class, 'buscarAtendimento'])->name('home');

Route::get('/lista_chamados', [AtendimentoController::class, 'buscarAtendimento']);
Route::get('/salvar_chamado', [AtendimentoController::class, 'salvarAtendimento']);