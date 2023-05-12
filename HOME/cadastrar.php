<?php

if (isset($_POST['email_usuario']) && !empty($_POST['senha'])){

    include ("conexao.php");
    $usuario = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];

    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$usuario' AND senha_usuario = '$senha'";

    $result = $mysqli->query($sql);

    if (mysqli_num_rows ($result) < 1){
      header('Location:homepage.php');

    }
    else   header('Location:../inicial/telaprincipal.html');
}

else {
    header('Location:../inicial/telaprincipal.html');
}
    
?>








