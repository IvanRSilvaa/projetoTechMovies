<?php

if(isset($_POST['submit'])){
    include_once('PaginaConexao.php');

    $nome=$_POST['nome'];
    $gmail=$_POST['gmail'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,gmail,senha,telefone) VALUES('$nome', '$gmail','$senha','$telefone')");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastrogratis1.css">
    <title>Cadastro Gratis</title>
</head>
<body>
    
<form action="cadastrar.php" method="POST"> 
    <center><h1 id="titulo"><i>Cadastre-se e assista diversos filmes e séries!!!</i></h1></center>
        
<fieldset class="grupo">
<div class="campo">    
    <label for="nome"><i>Insira seu nome:</i></label>
<input  type="text" name="nome_usuario" id="nome"  >
</div>

<div class="campo">
    <label for="gmail"><i>Insira seu gmail:</i></label>
 <input type="email" name="email_usuario" id="gmail" >   
</div>

<div class="campo">
    <label for="senha"><i>Insira sua senha:</i></label>
    <input type="password" name="senha_usuario" id="senha" >
</div>

<div class="campo">
    <label for="telefone"><i>Insira seu telefone:</i></label>
    <input type="tel" name="telefone" id="telefone" >
</div>
<input class="botao" type="submit" name="submit" id="submit">

</fieldset> 
</form>
<script src="js/sweetalert2.js"></script>

<!-- Incluir JavaScript no HTML -->
<script src="js/custom.js"></script>

</body>
</html>
