<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController; // da mesma forma que chamou UserController chamamos ProdutoController tambem
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]); // endereco da url

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);



Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]); // endereco da url

Route::get('/listar_produtos', [ProdutoController::class, 'listar']); // 

Route::post('/criar_produto', [ProdutoController::class, 'criar']);