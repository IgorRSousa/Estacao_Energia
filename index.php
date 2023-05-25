<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Front/style.css">
    <link rel="stylesheet" href="Front/bulma/css/bulma.min.css">
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Resultado Mineração</title>
</head>
<body>
<canvas id="myChart"></canvas>

<?php
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/' :
            require __DIR__ . '/Front/home.php';
            break;
        case '' :
            require __DIR__ . '/Front/home.php';
            break;
        case '/index.php' :
            require __DIR__ . '/Front/home.php';
            break;

        
        
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
?>
</body>
</html>