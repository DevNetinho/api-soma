<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacoes;

class OperacoesController extends Controller
{

    public function index() {
        return response()->json(['operacoes' => 'adicao, subtracao, multiplicacao, divisao'], 200);
    }

    public function operacao(Request $request) {
        
        $operacao = $request->operacao;
        $n1 = $request->n1;
        $n2 = $request->n2;

        if ($operacao == 'adicao') { //SOMAR
            $resultado = $n1 + $n2;
            Operacoes::create([
                'tipo_operacao' => $operacao,
                'operacao' => $n1 . ' + ' . $n2,
            ]);
            return response()->json(['resultado' => $resultado], 200);
        } 
        elseif ($operacao == 'subtracao') { //SUBTRAIR
            $resultado = $n1 - $n2;
            Operacoes::create([
                'tipo_operacao' => $operacao,
                'operacao' => $n1 . ' - ' . $n2,
            ]);
            return response()->json(['resultado' => $resultado], 200);
        }
        elseif ($operacao == 'multiplicacao') { //MULTIPLICAR
            $resultado = $n1 * $n2;
            Operacoes::create([
                'tipo_operacao' => $operacao,
                'operacao' => $n1 . ' x ' . $n2,
            ]);
            return response()->json(['resultado' => $resultado], 200);
        }
        elseif ($operacao == 'divisao') { //DIVIDIR
            $resultado = $n1 / $n2;
            Operacoes::create([
                'tipo_operacao' => $operacao,
                'operacao' => $n1 . ' / ' . $n2,
            ]);
            return response()->json(['resultado' => $resultado], 200);
        }

        return response()->json(['erro' => 'Insira o tipo da operação a ser feita!'], 404);

    }

    public function historico() {
        $historico = Operacoes::all()->count();

        if($historico == 0) {
            return response()->json(['vazio' => 'não há registros no banco de dados!']);
        }

        return response()->json([$historico], 200);

    }

    public function limpar() {
        Operacoes::truncate(); //DELETA TODOS OS REGISTROS DO BANCO

        return response()->json(['limpar' => 'Todos registros foram removidos com sucesso!'], 200);

    }

}
