<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("/estacao-energia/{id}", "EstacaoEnergiaController@consultaPorId");
$router->get("/estacao-energia", "EstacaoEnergiaController@consultarTodos");
$router->post("/estacao-energia/inserir", "EstacaoEnergiaController@inserir");
$router->delete("/estacao-energia/{id}", "EstacaoEnergiaController@deletar");
$router->patch("/estacao-energia/{id}", "EstacaoEnergiaController@alterar");

$router->get("/estacao-media/{id}", "EstacaoMediaMensalController@consultaPorId");
$router->get("/estacao-media", "EstacaoMediaMensalController@consultarTodos");
$router->get("/estacao-media/potencia-ativa", "EstacaoMediaMensalController@consultarPotenciaAtiva");
$router->post("/estacao-media/inserir", "EstacaoMediaMensalController@inserir");
$router->delete("/estacao-media/{id}", "EstacaoMediaMensalController@deletar");
$router->patch("/estacao-media/{id}", "EstacaoMediaMensalController@alterar");