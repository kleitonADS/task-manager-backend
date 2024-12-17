<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // Listar todas as tarefas
    public function index()
    {
        $tarefas = Tarefa::all();
        return response()->json($tarefas);
    }

    // Mostrar uma tarefa específica
    public function show($id)
    {
        $tarefa = Tarefa::find($id);

        if (!$tarefa) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }

        return response()->json($tarefa);
    }

    // Criar uma nova tarefa
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'status' => 'required|in:pendente,concluído',
        ]);

        $tarefa = Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return response()->json($tarefa, 201);
    }

    // Atualizar uma tarefa existente
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::find($id);

        if (!$tarefa) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }

        $request->validate([
            'titulo' => 'required|min:3',
            'status' => 'required|in:pendente,concluido',
        ]);

        $tarefa->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return response()->json($tarefa);
    }

    // Excluir uma tarefa específica
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);

        if (!$tarefa) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }

        $tarefa->delete();
        return response()->json(['message' => 'Tarefa excluída com sucesso']);
    }
}
