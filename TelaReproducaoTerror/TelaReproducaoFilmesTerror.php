<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="EstiloTelaReproducaoFilmesTerror.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Tela de Reprodução dos filmes</title>
   </head>
<body>


        <a class="BotaoVoltar" href="../../terror/telaterror/terror.php"><img id="SetaVoltar" src="back.png" alt=""></a>


<main>
 <section class="Principal">
<!--FIlme-->
<center><iframe id="Filme" width="1280" height="720" src="https://www.youtube.com/embed/D6HF2nJxKEk" title="O GRITO 1 FILME DUBLADO 4K | TERROR TUBE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
   <p id="DescricaoSerie">Depois que uma jovem mãe mata a família em sua própria casa, uma mãe solteira e um detetive tentam investigar
     e resolver o caso. Mais tarde, eles descobrem que a casa é amaldiçoada.</p>
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
    <img src="ImgTelaVideo/Andrea.jpeg" alt="Andrea Riseborough" width="162" height="216">
    </a>
    </figure>
    
    <div class="Person">
        <center><p class="Atores">Andrea Riseborough</p></center>
        <center><p class="Atores">Personagem : Detective Muldoon</p></center>
    </div>
</div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/John.jpeg" alt="John Cho" width="162" height="216">
    </a>
    </figure>
    <div class="Person">
        <center><p class="Atores">ohn Cho</p></center>
        <center><p class="Atores">Personagem : Peter Spencer</p></center>
    </div>
    </div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo/Lin.jpeg" alt="Lin Shaye" width="162" height="216">
    </figure>
    <div class="Person">
        <center><p class="Atores">Lin Shaye</p></center>
            <center><p class="Atores">Personagem : Faith Matheson</p></center>
    </div>
    </div>


    <div class="Personagem">
    <figure class="Foto ">
    <img src="ImgTelaVideo/Demián.jpeg" alt="Demián Bichir" width="162" height="216">
    </figure>
    <div class="Person">
       <center><p class="Atores">Demián Bichir</p></center>
       <center><p class="Atores">Personagem : Detective Goodman</p></center>
    </div>
    </div>
    </section>

</main> 

<footer>
</footer>  


</body>
</html>