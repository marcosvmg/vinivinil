<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home']);


Route::get('/sobre', [AppController::class, 'sobre']);

Route::get('/home', [AppController::class, 'home']);

Route::get('/produtos', [AppController::class, 'produtos']);

Route::get('/contato', [AppController::class, 'contato']);
Route::post('/addcontato', [AppController::class, 'addcontato']);

Route::get('/frmproduto', [AppController::class, 'frmproduto']);
Route::post('/addproduto', [AppController::class, 'addproduto']);
Route::get('/frmusuario', [AppController::class, 'frmusuario']);
Route::post('/addusuario', [AppController::class, 'addusuario']);

Route::get('/usuarios', [AppController::class, 'usuarios']);

Route::get('/frmeditusuario/{id}', [AppController::class, 'frmeditusuario']);


Route::post('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);
Route::get('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);


Route::get('/frmlogin', [AppController::class, 'frmlogin']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::get('/logout', [AppController::class, 'logout']);

Route::get('/listaproduto', [AppController::class, 'listaproduto']);
Route::get('/frmeditproduto/{id}', [AppController::class, 'frmeditproduto']);
Route::put('/atualizarproduto/{id}', [AppController::class, 'atualizarproduto']);
Route::delete('/excluirproduto/{id}', [AppController::class, 'excluirproduto'])->name('produto.excluir');

Route::get('/listacontato', [AppController::class, 'listacontato']);
Route::delete('/excluircontato/{id}', [AppController::class, 'excluircontato']);

?>