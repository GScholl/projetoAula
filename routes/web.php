<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('menu');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;

// Login Routes
Route::get('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::post('/logar', [UsuarioController::class, 'logar'])->name('usuarios.logar');

//Usuario Routes
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/cadastro', [UsuarioController::class, 'cadastro'])->name('usuarios.cadastro');
Route::post('/usuarios/novo', [UsuarioController::class, 'novo'])->name('usuarios.novo');
Route::get('usuario/editar/{id}', [UsuarioController::class, 'editar'])->name('usuarios.editar')->where('id', '[0-9]+');
Route::post('usuario/edita', [UsuarioController::class, 'edita'])->name('usuarios.edita');
Route::get('usuario/excluir/{id}', [UsuarioController::class, 'excluir'])->name('usuarios.excluir')->where('id', '[0-9]+');


//Produtos Routes
Route::get('produto/editar/{id}', [ProdutoController::class, 'editar'])->name('produtos.editar')->where('id', '[0-9]+');
Route::post('produto/edita', [ProdutoController::class, 'edita'])->name('produtos.edita');
Route::get('produto/excluir/{id}', [ProdutoController::class, 'excluir'])->name('produtos.excluir')->where('id', '[0-9]+');
Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos.novo');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/cadastro', [ProdutoController::class, 'cadastro'])->name('produtos.cadastro');
