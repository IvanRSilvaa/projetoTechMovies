<?php
session_start();
 
?>

<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link href="filmesBackground.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link rel="icon" href="TECHMOVIES LOGO.png" type="image/icon">
        <title>|| Home ||</title>
    </head>


  <body>
    
    <header>
      <img class="logo" src="TECHMOVIES LOGO 2.png">
      <p class="subtitle">Assista aos melhores filmes e séries em alta definição!</p>
      <br>

        <n av>
            <ul>
                <!--INPUT LOGIN-->
                <form id="cad-usuario-form"  method ="POST" action="cadastrar.php"> 
                <li>
                  <div class="input-group">
                    <div>
                      <input required="" type="email" name="email_usuario" id="email_usuario" autocomplete="off" class="input">
                      <label class="user-label">Login</label>
                      <!--INPUT SENHA-->
                    </div>
                    <div>
                      <input required="" type="password" name="senha_usuario" id="senha_usuario" autocomplete="off" class="input">
                      <label class="user-labels">Senha</label>
                    </div>
                    <div>
                      <li ><button>Acessar</button></li>
                    </div>
                  </div>
                </li>
                
                
                
              </form>
            </ul>

        </n>
    </header>


    <main>
   <br><br><br><br>
   
    </main>
    <footer class="fixar-rodape">
        <center>
            <ul>
                <li class="liheader"><a class="info" href="#">Sobre</li></a>
                <li>Não é cliente?</li>
                <li class="liheader"><a class="cad" href="../telaplanos/telaplanos.html">Cadastre-se</a></li>
            </ul>
        </center>
      <p>&copy; TechMovies - Todos os direitos reservados.</p>
    </footer>
  </body>
</html>