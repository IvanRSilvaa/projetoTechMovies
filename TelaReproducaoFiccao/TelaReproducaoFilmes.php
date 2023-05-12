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


        <a class="BotaoVoltar" href="../../ficcao/ficcao.php"><img id="SetaVoltar" src="back.png" alt=""></a>


<main>
 <section class="Principal">
<!--Trailer do filme The Witcher-->
<center><iframe id="Filme" width="1400" height="720" src="https://www.youtube.com/embed/kE9Ndac_Yis" title="CAVALEIROS DO TEMPO | LANÇAMENTO 2022 | FILME DE AÇÃO EM PORTUGUÊS | DUBLAGEM EXCLUSIVA" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
   <p id="DescricaoSerie">Em 1536, um alquimista criou o Cronos, 
    objeto que concede vida eterna a quem o detém. Séculos depois,
     Cronos chega às mãos de um vendedor, que dispara o mecanismo e causa uma grande 
     transformação em sua vida.</p>
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
    <img src="ImgTelaVideo/Ron Perlman.jfif" alt="Ron Perlman" width="162" height="216">
    </a>
    </figure>
    
    <div class="Person">
        <center><p class="Atores">Ron Perlman</p></center>
        <center><p class="Atores">Personagem : Angel de la Guardia</p></center>
    </div>
</div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/Federico Luppi.jfif" alt="Federico Luppi" width="162" height="216">
    </a>
    </figure>
    <div class="Person">
        <center><p class="Atores">Federico Luppi</p></center>
        <center><p class="Atores">Personagem : Jesus Gris</p></center>
    </div>
    </div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/Tamara Shanath.jfif" alt="Tamara Shanath" width="162" height="216">
    </figure>
    <div class="Person">
        <center><p class="Atores">Tamara Shanath</p></center>
            <center><p class="Atores">Personagem : Aurora Gris</p></center>
    </div>
    </div>


    <div class="Personagem">
    <figure class="Foto ">
    <img src="ImgTelaVideo/Margarita Isabel.jfif" alt="Margarita Isabel" width="162" height="216">
    </figure>
    <div class="Person">
       <center><p class="Atores">Margarita Isabel</p></center>
       <center><p class="Atores">Personagem : Mercedes</p></center>
    </div>
    </div>
    </section>

</main> 

<footer>
</footer>  


</body>
</html>