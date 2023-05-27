<?php
    $url = 'http://localhost:8000/estacao-media/potencia';
    $dado = file_get_contents($url);
    $jsonDados = json_decode($dado);
    $mes = 7;
    
    print("<h1 class='titulos'>Potência Ativa</h1>");

    print('<div class="columns">');
    foreach($jsonDados as $chave => $valor){
        print "<div id='PotenciaAtiva' class='box column'>
                    <h1>Media Mensal: $mes/2022</h1>
                    <h1>Potência Ativa (kW)</h1>
                    <h1 class ='potencia'>$chave kW</h1>
                </div>";
              
        $mes = $mes + 1;
        }
    print('</div>');

    print('<canvas id="myChart4"></canvas>');
?>

<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\consultPotencia.php"); ?>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoPotenciaAtiva.php"); ?>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoDemandaPW.php"); ?>

