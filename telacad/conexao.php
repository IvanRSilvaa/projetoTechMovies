<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "teste";
$port = 3306;

try{
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso!";
}  catch(PDOException $err){
    die("Erro: Conexão com banco de dados não foi realizada . Erro gerado " . $err->getMessage());
}