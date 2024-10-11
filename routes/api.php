<?php

use App\Http\Controllers\TarefaController;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('tarefa', [TarefaController::class, 'cadastrar']);

Route::get('tarefa/{id}', [TarefaController::class, 'findById']);

Route::get('tarefa/find/request',[TarefaController::class, 'findByIdRequest']);