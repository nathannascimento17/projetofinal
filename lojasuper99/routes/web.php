<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

    Auth::routes();
//Rota para pagina 
    Route::get('/', 'HomeController@index')->name('index');
//Rota para pagina de contato
    Route::get('/contato', 'HomeController@contato')->name('contato');

//Rota para listar produtos da categoria
    Route::get('/categoria/{id}', 'HomeController@categoria')->name('categoria.produtos');

//Rota para listar produtos da busca
    Route::get('/busca', 'HomeController@busca')->name('busca.produtos');
    Route::get('/produto/{id}', 'HomeController@produto')->name('produto');
    Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
    Route::get('/carrinho/adicionar', function () {
    return redirect()->route('index');
    });

//Rotas para o carrinho
    Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
    Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
    Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
    Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
    Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');
    Route::post('/carrinho/desconto', 'CarrinhoController@desconto')->name('carrinho.desconto');

// rotas do admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('produtos', 'Admin\ProdutoController@index')->name('admin.produtos');
    Route::get('produtos/adicionar', 'Admin\ProdutoController@adicionar')->name('admin.produtos.adicionar');
    Route::post('produtos/salvar', 'Admin\ProdutoController@salvar')->name('admin.produtos.salvar');
    Route::get('produtos/editar/{id}', 'Admin\ProdutoController@editar')->name('admin.produtos.editar');
    Route::put('produtos/atualizar/{id}', 'Admin\ProdutoController@atualizar')->name('admin.produtos.atualizar');
    Route::get('produtos/deletar/{id}', 'Admin\ProdutoController@deletar')->name('admin.produtos.deletar');
});
