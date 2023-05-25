<?php

namespace Database\Seeders;

require 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use App\Models\EstacaoEnergiaModel;
use DateTime;

class EstacaoEnergiaSeeder extends Seeder
{
    public function run(): void
    {   
        $file = fopen("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\ArquivosComOsDados\Estação_Energia.csv", "r");
        $row = 0;
        while ($line = fgetcsv($file, 1000, ",")) {
            if ($row++ == 0) {
                continue;
            }
            
            if(explode(";",$line[0])[1] != "NULL"){
                $estacao_energia = new EstacaoEnergiaModel;
                $estacao_energia->Data_Registro = new DateTime(explode(";",$line[0])[0]);
                $estacao_energia->Tensao_Fase_RS_V = floatval(explode(";",$line[0])[1]);
                $estacao_energia->Tensao_Fase_ST_V = floatval(explode(";",$line[0])[2],);
                $estacao_energia->Tensao_Fase_TR_V = floatval(explode(";",$line[0])[3]);
                $estacao_energia->Corrente_Fase_R_A = floatval(explode(";",$line[0])[4]);
                $estacao_energia->Corrente_Fase_S_A = floatval(explode(";",$line[0])[5]);
                $estacao_energia->Corrente_Fase_T_A = floatval(explode(";",$line[0])[6]);
                $estacao_energia->Demanda_kW = floatval(explode(";",$line[0])[7]);
                $estacao_energia->Potencia_Ativa_kW = floatval(explode(";",$line[0])[8]);
                $estacao_energia->save();

            }else{
                continue;
            }
        }
        fclose($file);
    }
}