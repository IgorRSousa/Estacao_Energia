<h1 class='titulos'>Comparativo das Tensões</h1>

<?php
    $url = 'http://localhost:8000/estacao-media';
    $dado = file_get_contents($url);
    $jsonDados = json_decode($dado);
    $mes = 7;

    $faseRS = [];
    $faseST = [];
    $faseTR = [];

    foreach($jsonDados as $objeto){
        $faseRS[] = $objeto->Tensao_Fase_RS_V;
        $faseST[] = $objeto->Tensao_Fase_ST_V;
        $faseTR[] = $objeto->Tensao_Fase_TR_V;
    }

    $mediasTensao = ["RS" => round(array_sum($faseRS) / count($faseRS), 2),
                     "ST" => round(array_sum($faseST) / count($faseST), 2),
                     "TR" => round(array_sum($faseTR) / count($faseTR), 2)];

    print('<div class="columns">');
    foreach($mediasTensao as $chave => $valor){
        print "<div id='PotenciaAtiva' class='box column'>
                    <h1>Media do Periodo Total</h1>
                    <h1>Tensâo em $chave (V)</h1>
                    <h1 class ='potencia'>$valor V</h1>
                </div>";

        $mes = $mes + 1;
    }
    print('</div>');
    
?>

<canvas id="myChart1"></canvas>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoTensao.php"); ?>