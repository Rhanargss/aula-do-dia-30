<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/*Routes de clientes*/


// Cadastra um cliente //

Route::post('/clientes','ClientesController@create')->name('create-clientes');

// Verifica os clientes cadastrados //


Route::get('/clientes', 'ClientesController@list')->name('list-clientes');

// Verifica o cliente pelo id //


Route::get('/clientes/{id}', 'ClientesController@show')->name('show-clientes');

// Edita alguma informação //

Route::put('/clientes/{id}', 'ClientesController@update')->name('update-clientes');

// Deleta algum cadastro //

Route::delete('/clientes/{id}', 'ClientesController@delete')->name('delete-clientes');



/*Routes de livros*/


// Cadastra um livro //

Route::post('/livros','LivrosController@create')->name('create-livros');

// Verifica os livros cadastrados //

Route::get('/livros', 'LivrosController@list')->name('list-livros');

// Verifica o livro pelo id //

Route::get('/livros/{id}', 'LivrosController@show')->name('show-livros');

// Edita alguma informação //

Route::put('/livros/{id}', 'LivrosController@update')->name('update-livros');

// Deleta algum cadastro //

Route::delete('/livros/{id}', 'LivrosController@delete')->name('delete-livros');



/*Routes de emprestimos*/


Route::apiResource('emprestimos', 'EmprestimoController');

