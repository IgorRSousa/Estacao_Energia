<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("/estacao-energia/{id}", "EstacaoEnergiaController@consultaPorId");
$router->get("/estacao-energia", "EstacaoEnergiaController@consultarTodos");
$router->get("/estacao-energia/potencia-ativa", "EstacaoEnergiaController@consultarPotenciaAtiva");
$router->post("/estacao-energia/inserir", "EstacaoEnergiaController@inserir");
$router->delete("/estacao-energia/{id}", "EstacaoEnergiaController@deletar");
$router->patch("/estacao-energia/{id}", "EstacaoEnergiaController@alterar");