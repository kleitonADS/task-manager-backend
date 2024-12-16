<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/tarefas', [TarefaController::class, 'index']);
Route::get('/tarefa/{id}', [TarefaController::class, 'show']);
Route::post('/tarefa', [TarefaController::class, 'store']);
Route::put('/tarefa/{id}', [TarefaController::class, 'update']);
Route::delete('/tarefa/{id}', [TarefaController::class, 'destroy']);
