# Estacão Energia

### Apresentação Inicial

A ideia desse projeto tem como principal objetivo fazer um comparativo estatístico de alguns dados fornecidos nesse caso as medições feitas
em uma Estação de Energia esses dados são fornecidos a partir de um arquivo .csv é a partir dele foi feito a filtragem e mineração para 
exibição do resultado que será visto.

##

### Tecnologias

#### Marcação
- HTML 5 
- CSS 3 

#### Linguagem de Programação
- JavaScript
- PHP

#### Frameworks
- Bulma
- Lumen Laravel
- Node.js

#### Banco de Dados
- PostgreSQL

#### Outros
- Composer

##

<div style="display: inline_block"><br>
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bulma/bulma-plain.svg"/>
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" />
  <img align="center" alt="Rafa-Ts" height="50" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" />
</div>

##

## Como testar o Projeto

##### Obs: Tecnologias citadas anteriormente precisam estar instaladas (PostgreSQL, Composer e PHP)

### Passo 1:

- Clone o repositorio atual, escolha uma pasta onde deseja colocar o projeto: 

      git clone  https://github.com/IgorRSousa/Estacao_Energia.git

### Passo 2:

- Crie um banco de dados para o sistema (Para o primeriro comando o sistema pedira a senha do postgres):
  - Com cmd

        psql -U postgres
        CREATE DATABASE estacao_energia;

### Passo 3:

- Abra o projeto que foi clonado e abra a pasta da API, nela copie e cole o arquivo .env.example e o renomei com .env.
  -  `./Estacao_Energia/API_Estacao/.env.example` -> `./Estacao_Energia/API_Estacao/.env`

### Passo 4: 

- Configure a API para ela reconhecer o banco de dados:  

![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/525de7d2-185f-485c-bb97-d48bc6779ad5)

### Passo 5: 

- Instale o composer na API (cmd):

      .\Estacao_Energia\API_Estacao>composer install
      
### Passo 6:

- Abra o cmd e navege ate a pasta de API `/Estacao_Energia/API_Estacao/` nela rode os seguintes comandos: 

      php artisan migrate:refresh
      php artisan db:seed
 
### Passo 7: 

- Certo agora esta tudo configurado basta iniciar o servidor, usaresmos os servidores nativos do PHP.
- Por ser uma API e um Front externo é necessario usar dois servidores
<br>

- O primerio deve ser rodados na pasta do projeto `/Estacao_Energia` navege ate ela no cmd e execute:

      php -S localhost:5000

- O segundo deve ser rodados na pasta do public da API `/Estacao_Energia/API_Estacao/public` navege ate ela no cmd e execute:

      php -S localhost:8000
### Passo Final: 

- Pronto basta ir ate o seu navegador e colocar a url `http://localhost:5000/` e o sistema estrá rodando ! 
