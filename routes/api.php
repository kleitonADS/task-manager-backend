<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

//  Route::apiResource('tarefas', TarefaController::class);

Route::prefix('tarefas')->group(function () {
    Route::get('/', [TarefaController::class, 'index']);
    Route::get('/{id}', [TarefaController::class, 'show']);
    Route::post('/', [TarefaController::class, 'store']);
    Route::put('/{id}', [TarefaController::class, 'update']);
    Route::delete('/{id}', [TarefaController::class, 'destroy']);
});
