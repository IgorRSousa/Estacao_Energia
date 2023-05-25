<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstacaoEnergiaModel extends Model
{
    protected $table = 'estacao_energia';
    protected $fillable = ['Data_Registro',
                           'Tensao_Fase_RS_V',
                           'Tensao_Fase_ST  V',
                           'Tensao_Fase_TR_V',
                           'Corrente_Fase_R_A',
                           'Corrente_Fase_S_A',
                           'Corrente_Fase_T_A',
                           'Demanda_kW',
                           'Potencia-Ativa_kW'];
    
    public $timestamps = false;
}
