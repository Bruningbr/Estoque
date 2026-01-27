<?php

namespace App\Http\Controllers;

use App\Models\Cliete;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliete::all();
        return response()->json($cliente);
    }

    public function store(Request $request) {
            if (Cliete::where('cpf', $request->cpf)->exists()){
                return response()->json(['erro'=> 'CPF já cadastrado']);
            }

        $cliente = Cliete::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'idade' => $request->idade,
        ]);

        return response()->json($cliente, 201);
    }
    public function update(Request $request) {
        
        $cliente = Cliete::find($request->id);

        if($cliente == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }

        if(isset($return->nome)){
            $cliente->nome = $request->nome;
        }
        if(isset($return->cpf)){
            $cliente->cpf = $request->cpf;
        }
        if(isset($return->idade)){
            $cliente->idade = $request->idade;

        $cliente->update();

        return response()->json(['mensagem' => 'atualizada']);
        }
    }

            public function delete($id){

        $cliente = Cliete::find($id);

        if ($cliente = null){
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }

        $cliente->delete();

        return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
        
        }
}
