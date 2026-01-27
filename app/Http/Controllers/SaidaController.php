<?php

namespace App\Http\Controllers;

use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    public function index(){
        $saida = Saida::all();
        return response()->json($saida);
    }

    public function store(Request $request) {
            if (Saida::where('cpf', $request->cpf)->exists()){
                return response()->json(['erro'=> 'CPF já cadastrado']);
            }

        $cliente = Saida::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'idade' => $request->idade,
        ]);

        return response()->json($saida, 201);
    }
}
