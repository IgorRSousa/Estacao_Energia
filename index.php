<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Front/style.css">
    <link rel="stylesheet" href="Front/bulma/css/bulma.min.css">
    

    <script src="node_modules/chart.js/dist/chart.umd.js"></script>

    <title>Resultado Mineração</title>
</head>
<body>

    <nav id="navBarId" class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>

                <a class="navbar-item" href="/Comparativo">
                    Comparativo Tensao e Corrente
                </a>

                <a class="navbar-item" href="/InformacoesPotencia">
                    Info Potencia
                </a>
            </div>
        </div>
    </nav>

    <div id="corpo" class="box">
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
                
                case '/Comparativo':
                    require __DIR__. '/Front/comparativoTensaoCorrente.php';
                    break;

                case '/InformacoesPotencia':
                    require __DIR__. '/Front/informacoesPotencia.php';
                    break;

                
                
                default:
                    http_response_code(404);
                    require __DIR__ . '/Front/404.php';
                    break;
            }
        ?>
    </div>

    <footer id="footer" class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Estação de Energia</strong> by <a href="https://github.com/IgorRSousa">Igor Sousa</a>.
            </p>
        </div>
    </footer>
</body>
</html>