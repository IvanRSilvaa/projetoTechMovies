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
        <a class="BotaoVoltar" href="../../telaComedia/comedia.php"><img id="SetaVoltar" src="back.png" alt=""></a>
<main>
 <section class="Principal">
<center>
    <iframe id="Filme" width="1280" height="720" src="https://www.youtube.com/embed/q0gZOGoRRnc" title="Até Que a Sorte Nos Separe - Filme Completo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
   <p id="DescricaoSerie">Tino é um pai de família que tem sua rotina transformada ao ganhar na loteria. Em dez anos, o fanfarrão e sua mulher Jane gastam todo o 
    dinheiro com uma vida de ostentação. Quando descobre que está falido, ele é obrigado a aceitar a ajuda de seu vizinho Amauri, um consultor financeiro nada divertido 
    e extremamente econômico. Jane engravida do terceiro filho e Tino faz de tudo para esconder da esposa que estão na pior, pois a recomendação médica é que a grávida 
    evite fortes emoções.</p>
</div>

<div class="PosicaoDivAvaliacao">

<div class="PosicionamentoItensAvaliacao">
<div class="NotaAvaliacaoEstrelas">

    <div class="IconeEstrela">
    <span class="material-symbols-outlined" class="Estrela">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined" class="Estrela">star</span>  
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined" class="Estrela">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined" class="Estrela">star</span>
</div>

<div class="IconeEstrela">
    <span class="material-symbols-outlined" class="Estrela">star</span>
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
    <img src="ImgTelaVideo\Hassum.jpg" alt="Leandro Hassum" width="162" height="216">
    </a>
    </figure>
    
    <div class="Person">
        <center><p class="Atores">Leandro Hassum</p></center>
        <center><p class="Atores">Personagem : Tino</p></center>
    </div>
</div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo\danielle.jpeg" alt="Danielle Winits" width="162" height="216">
    </a>
    </figure>
    <div class="Person">
        <center><p class="Atores">Danielle Winits</p></center>
        <center><p class="Atores">Personagem : Jane</p></center>
    </div>
    </div>

    <div class="Personagem">
    <figure class="Foto">
    <img src="ImgTelaVideo\julia.jpg" alt="Julia Dalavia" width="162" height="216">
    </figure>
    <div class="Person">
        <center><p class="Atores">Julia Dalavia</p></center>
            <center><p class="Atores">Personagem : Tete</p></center>
    </div>
    </div>


    <div class="Personagem">
    <figure class="Foto ">
    <img src="ImgTelaVideo\kiko.jpg" alt="Kiko Mascarenhas" width="162" height="216">
    </figure>
    <div class="Person">
       <center><p class="Atores">Kiko Mascarenhas</p></center>
       <center><p class="Atores">Personagem : Amauri Ferreira</p></center>
    </div>
    </div>
    </section>

</main> 

<footer>
</footer>  


</body>
</html>