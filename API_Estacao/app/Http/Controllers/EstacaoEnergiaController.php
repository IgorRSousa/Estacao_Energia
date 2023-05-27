<?php

namespace App\Http\Controllers;

use App\Models\EstacaoEnergiaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class EstacaoEnergiaController extends Controller
{
    public function __construct()
    {
        //
    }

    // Consulta por ID
    public function consultaPorId($id)
    {
        return EstacaoEnergiaModel::findOrFail($id);
    }

    // Consulta total
    public function consultarTodos()
    {
        return EstacaoEnergiaModel::all();
    }

    public function consultarPotenciaAtiva(){
        return DB::table('estacao_energia')->pluck('Potencia_Ativa_kW');
    }

    // Criar um novo dado
    public function inserir(Request $request)
    {   
        try{
            return EstacaoEnergiaModel::create([
                "Data_Registro" => $request->Data_Registro,
                "Tensao_Fase_RS_V" =>$request->Tensao_Fase_RS_V,
                "Tensao_Fase_ST_V" =>$request->Tensao_Fase_ST_V,
                "Tensao_Fase_TR_V" =>$request->Tensao_Fase_TR_V,
                "Corrente_Fase_R_A" =>$request->Corrente_Fase_R_A,
                "Corrente_Fase_S_A" =>$request->Corrente_Fase_S_A,
                "Corrente_Fase_T_A" =>$request->Corrente_Fase_T_A,
                "Demanda_kW" =>$request->Demanda_kW,
                "Potencia_Ativa_kW" =>$request->Potencia_Ativa_kW
            ]);
        }catch(Exception){
            return response("Requisição feita de maneira incorreta", 400);
        }
    }

    // Deletar dado
    public function deletar($id)
    {
        $dadoExcluido = EstacaoEnergiaModel::findOrFail($id);
        $dadoExcluido->delete();
        return $dadoExcluido;
    }


    // Alterar dado
    public function alterar($id, Request $request)
    {
        $dadoASerAlterado = EstacaoEnergiaModel::findOrFail($id);
        foreach ($request->except('_token') as $chave => $valor){
            $dadoASerAlterado->update([$chave => $valor]);
        }
        return $dadoASerAlterado;
    }
}
