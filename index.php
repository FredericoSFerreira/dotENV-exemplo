<?php

// autoload do Composer 
require 'vendor/autoload.php'; 
 
// as duas linhas que carregam as variáveis do .env para variáveis de ambiente 
$dotenv = new Dotenv\Dotenv( __DIR__ ); 
$dotenv->load();

//Mostra o array com todas os valores definidos no .env
//print_r( $_ENV );

//Exemplo para pega o valor da variavel definda como SECRET_KEY usando o metodo getenv
echo getenv( 'SECRET_KEY' );

//Exemplo para pega o valor da variavel definda como SECRET_KEY via array
//echo $_ENV['SECRET_KEY'];