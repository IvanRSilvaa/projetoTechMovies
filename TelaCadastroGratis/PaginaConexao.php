<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "teste";

$conexao = new mysqli($hostname,$usuario,$senha,$bancodedados);

//if($conexao->connect_errno){
 //  echo"Erro:(".$conexao->connect_errno.")".$conexao->connect_errno; 
//}else{
 //   echo"Conexao efetuada com sucesso";}

?>