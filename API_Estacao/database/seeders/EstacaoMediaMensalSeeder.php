<?php

namespace Database\Seeders;

require 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use App\Models\EstacaoMediaMensalModel;
use DateTime;

class EstacaoMediaMensalSeeder extends Seeder
{
    public function run(): void
    {   
        $file = fopen("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\ArquivosComOsDados\Estação_Energia.csv", "r");
        $row = 0;

        $dataAnterior = "";
        $dataAtual = "";
        $mediaValores = [[],[],[],[],[],[],[],[]];

        while ($line = fgetcsv($file, 1000, ",")) {
            if ($row++ == 0) {
                continue;
            }
            
            $lineReposnse = explode(";",$line[0]);
            $dataAtual = substr($lineReposnse[0], 0, 10);

            if($lineReposnse[1] != "NULL"){
                if(substr($dataAnterior, 0, 8) != substr($dataAtual, 0, 8)){
                    if($dataAnterior == ""){
                        $dataAnterior = $dataAtual;
                        continue;
                    }else{
                        $estacao_energia = new EstacaoMediaMensalModel;
                        $estacao_energia->Data_Registro = $dataAnterior;
                        $estacao_energia->Tensao_Fase_RS_V = round(array_sum($mediaValores[0]) / count($mediaValores[0]), 2);
                        $estacao_energia->Tensao_Fase_ST_V = round(array_sum($mediaValores[1]) / count($mediaValores[1]), 2);
                        $estacao_energia->Tensao_Fase_TR_V = round(array_sum($mediaValores[2]) / count($mediaValores[2]), 2);
                        $estacao_energia->Corrente_Fase_R_A = round(array_sum($mediaValores[3]) / count($mediaValores[3]), 2);
                        $estacao_energia->Corrente_Fase_S_A = round(array_sum($mediaValores[4]) / count($mediaValores[4]), 2);
                        $estacao_energia->Corrente_Fase_T_A = round(array_sum($mediaValores[5]) / count($mediaValores[5]), 2);
                        $estacao_energia->Demanda_kW = round(array_sum($mediaValores[6]) / count($mediaValores[6]), 2);
                        $estacao_energia->Potencia_Ativa_kW = round(array_sum($mediaValores[7]) / count($mediaValores[7]), 2);
                        $estacao_energia->save();

                        $dataAnterior = $dataAtual;
                        $mediaValores = [[],[],[],[],[],[],[],[]];
                    }
                }else{
                    $mediaValores[0][] = floatval($lineReposnse[1]);
                    $mediaValores[1][] = floatval($lineReposnse[2]);
                    $mediaValores[2][] = floatval($lineReposnse[3]);
                    $mediaValores[3][] = floatval($lineReposnse[4]);
                    $mediaValores[4][] = floatval($lineReposnse[5]);
                    $mediaValores[5][] = floatval($lineReposnse[6]);
                    $mediaValores[6][] = floatval($lineReposnse[7]);
                    $mediaValores[7][] = floatval($lineReposnse[8]);
                }

            }else{
                continue;
            }
        }

        $estacao_energia = new EstacaoMediaMensalModel;
        $estacao_energia->Data_Registro = $dataAnterior;
        $estacao_energia->Tensao_Fase_RS_V = round(array_sum($mediaValores[0]) / count($mediaValores[0]), 2);
        $estacao_energia->Tensao_Fase_ST_V = round(array_sum($mediaValores[1]) / count($mediaValores[1]), 2);
        $estacao_energia->Tensao_Fase_TR_V = round(array_sum($mediaValores[2]) / count($mediaValores[2]), 2);
        $estacao_energia->Corrente_Fase_R_A = round(array_sum($mediaValores[3]) / count($mediaValores[3]), 2);
        $estacao_energia->Corrente_Fase_S_A = round(array_sum($mediaValores[4]) / count($mediaValores[4]), 2);
        $estacao_energia->Corrente_Fase_T_A = round(array_sum($mediaValores[5]) / count($mediaValores[5]), 2);
        $estacao_energia->Demanda_kW = round(array_sum($mediaValores[6]) / count($mediaValores[6]), 2);
        $estacao_energia->Potencia_Ativa_kW = round(array_sum($mediaValores[7]) / count($mediaValores[7]), 2);
        $estacao_energia->save();
        
        fclose($file);
    }
}