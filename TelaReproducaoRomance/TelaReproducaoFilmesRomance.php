<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="EstiloTelaReproducaoFilmes.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Tela de Reprodução dos filmes</title>
   </head>
<body>


        <a class="BotaoVoltar" href="../../romance/telaRomance/romance.php"><img id="SetaVoltar" src="back.png" alt=""></a>


<main>
 <section class="Principal">
<!--FIlme-->
<center><iframe id="Filme" width="1280" height="720" src="https://www.youtube.com/embed/4Y5jk3sNinA" title="Não O Tipo Da Cinderela (2018) | Filme Completo | Paris Warner | Tim Flynn | Tanner Gillman" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</center>

<form class="CaixaComentarios" action="Enviar.php" method="POST">

    <p id="Opiniao">Qual a sua opinião sobre o filme?</p>
    <textarea name="Comentarios" id="Comentarios" cols="8" rows="6"></textarea>
<button type="submit" name="submit" id="BotaoEnviarComentarios">Enviar</button>

</form>

<div class="RedesSociais"><ul class="LinhasIcones">
<li><a href="whatsapp://send?text= Escreva seu comentário:"> <img src="ImgTelaVideo/whatsapp.png"> </a></li>
<li><a href="https://t.me/share/url?url= Escreva sue comentário:"> <img src="ImgTelaVideo/telegram.png"> </a></li>
<li><a href="https://www.facebook.com/sharer/sharer.php?u= Escreva seu comentário:"> <img src="ImgTelaVideo/facebook.png"> </a></li>
<li><a href="https://www.twitter.com/intent/tweet?text= Escreva seu comentário:"> <img src="ImgTelaVideo/twitter.png"> </a></li>
<li><a href="https://www.linkedin.com/shareArticle?mini= Escreva seu comentário:"> <img src="ImgTelaVideo/linkedin.png"> </a></li>
</ul>

</div>

<div class="Sino" >
<div class="SinopseInfo">
    <h2>SINOPSE & INFO</h2>
   <p id="DescricaoSerie">Indy acha que sua vida está bem até que ela conhece um novo cara que a ajuda a descobrir quem ela é.</p>
</div>

<div class="PosicaoDivAvaliacao">

<div class="PosicionamentoItensAvaliacao">
<div class="NotaAvaliacaoEstrelas">

    <div class="IconeEstrela">
    <span class="material-symbols-outlined">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined">star</span>  
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined" id="EstrelaCinco">star</span>
</div>

</div>

<p id="Informaçoes"> Nota: 0</p>
<p id="Informaçoes"> 0 notas e 0 críticas</p>

</div>

<!--Avaliação do Filme pela seleção de estrelas-->

<ul class="Avaliacao">
<p id="TermoAvaliacao">Avalie:</p> 
 <li class="star-icon ativo" data-avaliacao="1"></li>
 <li class="star-icon" data-avaliacao="2"></li>
 <li class="star-icon" data-avaliacao="3"></li>
 <li class="star-icon" data-avaliacao="4"></li>
 <li class="star-icon" data-avaliacao="5"></li>
</ul>

</div>

</div>
 <script>
    
    var stars = document.querySelectorAll('.star-icon');
    
    document.addEventListener('click',function(e){
    var classStar = e.target.classList;
    if(!classStar.contains('ativo')){
    stars.forEach(function(star){
        star.classList.remove('ativo');
    
    });
    
    classStar.add('ativo');
    console.log(e.target.getAttribute('data-avaliacao'));
    }
    
    });
    
    </script>
    
</div>



</section>

<div class="TituloElenco ">
    <h2 class="TituloElencoH2">Elenco</h2>
</div>

<section class="Elenco">

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/TimFlynn.jpeg" alt="Tim Flynn" width="162" height="216">
    </a>
    </figure>
    
    <div class="Person">
        <center><p class="Atores">Tim Flynn</p></center>
        <center><p class="Atores">Personagem : Bryant Bailey</p></center>
    </div>
</div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/TannerGillman.jpeg" alt="Tanner Gillman" width="162" height="216">
    </a>
    </figure>
    <div class="Person">
        <center><p class="Atores">Tanner Gillman</p></center>
        <center><p class="Atores">Personagem : Maxton</p></center>
    </div>
    </div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/ParisWarner.jpeg" alt="Paris Warner" width="162" height="216">
    </figure>
    <div class="Person">
        <center><p class="Atores">Paris Warner</p></center>
            <center><p class="Atores">Personagem : Indy Zimmerman</p></center>
    </div>
    </div>


    <div class="Personagem">
    <figure class="Foto ">
    <img src="ImgTelaVideo/ArianaBagley.jpeg" alt="Ariana Bagley" width="162" height="216">
    </figure>
    <div class="Person">
       <center><p class="Atores">Ariana Bagley</p></center>
       <center><p class="Atores">Personagem : Kaitlyn</p></center>
    </div>
    </div>
    </section>

</main> 

<footer>
</footer>  


</body>
</html>