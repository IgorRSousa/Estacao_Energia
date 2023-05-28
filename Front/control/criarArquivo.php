<?php
    $url = 'http://localhost:8000/estacao-energia';
    $dado = file_get_contents($url);
    $resposta = json_decode($dado, true);

    $csvNome = 'Resultado.csv';
    $csvArquivo = __DIR__ . '../../../Resultado/' . $csvNome;

    $arquivo = fopen($csvArquivo, 'w');

    $colunas = array_keys($resposta[array_key_first($resposta)]);
    $colunas = array_filter($colunas, function($coluna) {
        return $coluna !== 'id';
    });

    $delimitador = ';';
    fputcsv($arquivo, $colunas, $delimitador);

    foreach ($resposta as $objeto) {
        unset($objeto['id']);
        fputcsv($arquivo, $objeto, $delimitador);
    }

    fclose($arquivo);
?>
<script>
    alert("Arquivo criado na pasta Resultado desse Projeto");
    location.href='/';
</script>