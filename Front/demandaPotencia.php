<?php
    $url = 'http://localhost:8000/estacao-media/potencia';
    $dado = file_get_contents($url);
    $jsonDados = json_decode($dado);
    $mes = 7;

    print("<h1 class='titulos'>Demanda de Potência</h1>");

    print('<div class="columns">');
    foreach($jsonDados as $chave => $valor){
        print "<div id='PotenciaAtiva' class='box column'>
                    <h1>Média Mensal: $mes/2022</h1>
                    <h1>Demanda Potência (kW)</h1>
                    <h1 class ='potencia'>$valor kW</h1>
                </div>";
              
        $mes = $mes + 1;
        }
    print('</div>');

    print('<canvas id="myChart3"></canvas>');
?>

<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\consultPotencia.php"); ?>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoPotenciaAtiva.php"); ?>
<?php include("C:\Users\IgorR\OneDrive\Área de Trabalho\Estacao_Energia\Front\control\graficoDemandaPW.php"); ?>

