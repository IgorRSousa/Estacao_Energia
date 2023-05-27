<h1 class='titulos'>Comparativo das Correntes</h1>

<?php
    $url = 'http://localhost:8000/estacao-media';
    $dado = file_get_contents($url);
    $jsonDados = json_decode($dado);
    $mes = 7;

    $faseRS = [];
    $faseST = [];
    $faseTR = [];

    foreach($jsonDados as $objeto){
        $faseR[] = $objeto->Corrente_Fase_R_A;
        $faseS[] = $objeto->Corrente_Fase_S_A;
        $faseT[] = $objeto->Corrente_Fase_T_A;
    }

    $mediasCorrente = ["R" => round(array_sum($faseR) / count($faseR), 2),
                       "S" => round(array_sum($faseS) / count($faseS), 2),
                       "T" => round(array_sum($faseT) / count($faseT), 2)];

    print('<div class="columns">');
    foreach($mediasCorrente as $chave => $valor){
        print "<div id='PotenciaAtiva' class='box column'>
                    <h1>Média do Período Total</h1>
                    <h1>Corrente em $chave (A)</h1>
                    <h1 class ='potencia'>$valor A</h1>
                </div>";

        $mes = $mes + 1;
    }
    print('</div>');
    
?>
<canvas id="myChart2"></canvas>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoCorrente.php"); ?>