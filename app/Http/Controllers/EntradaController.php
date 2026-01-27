<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
       public function delete($id){

        $entrada = Entrada::find($id);

        if ($entrada = null){
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }

        $entrada->delete();

        return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
        

        }
        public function store(Request $request) {
            if (Entrada::where('cpf', $request->cpf)->exists()){
                return response()->json(['erro'=> 'CPF já cadastrado']);
            }
}

}