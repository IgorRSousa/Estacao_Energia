# Estação Energia

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

##### Obs.: Tecnologias citadas anteriormente precisam estar instaladas (PostgreSQL, Composer e PHP)

### Passo 1:

- Clone o repositório atual, escolha uma pasta onde deseja colocar o projeto: 

      git clone  https://github.com/IgorRSousa/Estacao_Energia.git

### Passo 2:

- Crie um banco de dados para o sistema (Para o primeiro comando o sistema pedira a senha do postgres):
  - Com cmd

        psql -U postgres
        CREATE DATABASE estacao_energia;

### Passo 3:

- Abra o projeto que foi clonado e abra a pasta da API, nela copie e cole o arquivo .env.example e o renomeie com .env.
  -  `./Estacao_Energia/API_Estacao/.env.example` -> `./Estacao_Energia/API_Estacao/.env`

### Passo 4: 

- Configure a API para ela reconhecer o banco de dados:  

![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/525de7d2-185f-485c-bb97-d48bc6779ad5)

### Passo 5: 

- Instale o composer na API pasta `.\Estacao_Energia\API_Estacao>` (cmd):

      composer install
      
### Passo 6:

- Abra o cmd e navegue até a pasta de API `/Estacao_Energia/API_Estacao/` nela rode os seguintes comandos: 

      php artisan migrate:refresh
      php artisan db:seed
 
### Passo 7: 

- Certo agora está tudo configurado basta iniciar o servidor, usaremos os servidores nativos do PHP.
- Por ser uma API e um Front externo é necessário usar dois servidores
<br>

- O primeiro deve ser rodado na pasta do projeto `/Estacao_Energia` navegue até ela no cmd e execute:

      php -S localhost:5000

- O segundo deve ser rodado na pasta do public da API `/Estacao_Energia/API_Estacao/public` navegue até ela no cmd e execute:

      php -S localhost:8000
### Passo Final: 

- Pronto basta ir até o seu navegador e colocar a url `http://localhost:5000/` e o sistema estará rodando !

## Imagens das Telas do sistema

### Home `http://localhost:5000/`:
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/c1ba8803-df28-4778-8dd1-d1476904210f)

### Comparativo das Tensões `http://localhost:5000/ComparativoTensao`:
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/1b059476-c013-4f73-90a6-c6b979aa4ca8)

### Comparativo das Correntes `http://localhost:5000/ComparativoCorrente`:
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/9b021b2d-5b3d-4ee0-ac94-db1faab4b4b5)

### Demanda de Potência `http://localhost:5000/Demanda`: 
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/13e60731-7496-4444-afc1-297a5aa91259)

### Potência Ativa `http://localhost:5000/PotenciaAtiva`:
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/ee5730d5-7568-4e25-8432-2f9f51dbcf3e)

## Como gerar e consultar o Arquivo limpo

### Clique no botão Gerar Arquivo Limpo
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/0faeb8fe-797c-48f5-94d3-dfd2adf39e6d)

### E essa menssagem será exibida: 
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/742b15d4-b43b-4ad7-a65f-c09cbf57b55c)

### Ao clicar no botão azul na parte superior direita é criado um arquivo CSV na pasta `/Estacao_Energia/Resultado/Resultado.csv`:
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/a20b7168-9571-4baf-be55-1c1a76ebed5a)

### Arquivo criado (Excel):
![image](https://github.com/IgorRSousa/Estacao_Energia/assets/106490786/c8bda1df-103c-4fad-b03d-a1e29b1162ea)







