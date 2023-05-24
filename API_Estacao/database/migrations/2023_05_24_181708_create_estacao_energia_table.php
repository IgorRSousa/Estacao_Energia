<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estacao_energia', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Data_Registro");
            $table->double("Tensao_Fase_RS_V");
            $table->double("Tensao_Fase_ST_V");
            $table->double("Tensao_Fase_TR_V");
            $table->double("Corrente_Fase_R_A");
            $table->double("Corrente_Fase_S_A");
            $table->double("Corrente_Fase_T_A");
            $table->double("Demanda_kW");
            $table->double("Potencia-Ativa_kW");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estacao_energia');
    }
};
