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

    <link rel="shortcut icon" href="Front/favicon/favicon.ico" type="image/x-icon">

    <title>Resultado Mineração</title>
</head>
<body>

    <nav id="navBarId" class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <h1 class="logo">Estação Energia</h1>
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

                <a class="navbar-item" href="/ComparativoTensao">
                    Comparativo Tensao
                </a>

                <a class="navbar-item" href="/ComparativoCorrente">
                    Comparativo Corrente
                </a>

                <a class="navbar-item" href="/Demanda">
                    Demanda de Potecia
                </a>

                <a class="navbar-item" href="/PotenciaAtiva">
                    Potecia Ativa
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="/CriarArquivo">
                            <strong>Criar Arquivo</strong>
                        </a>
                    </div>
                </div>
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
                
                case '/ComparativoTensao':
                    require __DIR__. '/Front/comparativoTensao.php';
                    break;
                case '/ComparativoCorrente':
                    require __DIR__. '/Front/comparativoCorrente.php';
                    break;

                case '/PotenciaAtiva':
                    require __DIR__. '/Front/potenciaAtiva.php';
                    break;
                case '/Demanda':
                    require __DIR__. '/Front/demandaPotencia.php';
                    break;
                
                case '/CriarArquivo':
                    require __DIR__. '/Front/control/criarArquivo.php';
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
                <strong>Estação de Energia</strong> by <a href="https://github.com/IgorRSousa" target="_blank">Igor Sousa</a>.
            </p>
        </div>
    </footer>
</body>
</html>