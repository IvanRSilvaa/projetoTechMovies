<!--Pessoal tem muitas partes repetidas nesse código intt pra ficar mais facil fou comentar uma so no começo e as outras seguem o mesmo padrão-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aventura.css">
    <title>TECH MOVIES-AVENTURA</title>
    <!-- linkando o ícone -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
   
   <header>
 <form>
    <nav>
        <img class="logo-img" src="TECHMOVIES LOGO 2.png">
        <div class="logo" >TECH MOVIES</div>
    
        
        <div class="divBarraPesquisa">
            <Input class="barraPesquisa" name="pesquisa"  placeholder="Pesquisar">
                <button style="background: transparent; border: none;"><img src="ImgLupa.png" alt="Lupa" height="20" width="20" ></button>
        </div>
    


        <!--Cria as linhas do menu-->
        <div class="menu">
            <div class="linha1"></div>
            <div class="linha2"></div>
            <div class="linha3"></div>
        </div>

        <ul class="navlist">
            <li><a href="../inicial/telaprincipal.html">Início</a></li>
            <!-- imagen do ícone -->
                    <span id="FiltroGeneros" class="material-symbols-outlined" onclick="clickMenu()">filter_list</span>       
              <menu id="menugeneros">
                    <ul class="navlistGeneros">
                        <li><p style="color: bisque;">Escolha um Gênero:</p></li><br>
                    <li><a href="../terror/telaterror/terror.php">Terror</a></li><!--os .. serve pra voltar uma pasta-->
                        <li><a href="../telaAventura/aventura.php">Aventura</a></li>
                        <li><a href="../telaComedia/comedia.php">Comédia</a></li>
                        <li><a href="../romance/telaRomance/romance.php">Romance</a></li>
                        <li><a href="../ficcao/ficcao.php">Ficção Científica</a></li>      
                      </ul>
            </menu>
                        <li><a href="../telaplanosup/telaplanosup.html">Planos</a></li>
                        <li><a href="../Home/homepage.php">Sair</a></li>
                    </ul>
                    </div>
               </header>
               <main></main>

</form>




   
    <div class="banner">
        <video autoplay muted loop>
            <source src="tempora-141457 (1).mp4" type="video/mp4">     <!--fundo de tela-->
        </video>
        </div>


          
        <div class="texto">
             <center><h1>AVENTURA</h1></center>   <!--Titulo da tela--> 
        </div>

  <!--Add as imagens dos filmes por links e Add os titulos dos filmes -->
           
  <div class="titulo">             <!--Titulo separado que fica no cantinho (ele ta vermelho)-->
            <h1>Filmes</h1>
          </div>
          <div class="latest-inside">    <!--Esta classe e responsavel pelo espaço onde vai os elementos dos filmes-->
            <div class="main">            <!--Esta classe e como a anterior ela engloba os elementos onde estão os filmes ela e a parte preta  a diferença dessa para a "latest-inside" e que essa latest-inside ela e invisivel e como se fosse somente o espaço pre definido, se tiverem duvidas da uma inspecionada na pag-->


                <div class="latest-inside">     <!--Este e responsael pelo espaço em que somente a imagem do filme ocupa ou seja so o quadradinho com a borda azul-->
                    <a href="../TelaReproducao/FilmeAv/TelaReproducaoFilmes.php">  
                    <div class="quadrado"><img src="https://br.web.img2.acsta.net/pictures/16/06/23/16/28/282704.jpg" alt=""></a></div>  
                    <div class="heading1"> <!--Essa classe e responsavel por controlar os efeitos dos nomes dos filmes/series e as estrelas de uma so vez, e como se fosse uma classe mãe que eu mecho nos 2 elementos de uma so vez-->
                    <br>
                    <div class="nomefil"><!--Esse e o mesmo que o citado acima so que ele so edita o nome do filme-->
                    <h4>A Fera</h4>
                    </div>
                    <div class="estrela"><!--Esse edita so as estrelas-->
                    <p><span>&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>
            
                    <div class="latest-inside">
                    <div class="quadrado"><img src="https://www.sonypictures.com.br/sites/brazil/files/2022-04/UNCHARTED%20KEY%20ART.JPG" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Fora do Mapa</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="latest-inside">
                    <div class="quadrado"><img src="https://www.sonypictures.com.br/sites/brazil/files/2022-05/DP_6554044_Morbius_1920x2560_AMAZON_thumbnail_xlarge_0.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Morbius</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>
            
                    <div class="latest-inside">
                    <div class="quadrado"><img src="https://www.sonypictures.com.br/sites/brazil/files/2022-11/DP_6794770_WomanKing_2022_AMAZON_1920x2560_BoxArt_BR_thumbnail_xlarge.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>A Mulher Rei</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>
            
            
                    <div class="latest-inside">
                    <div class="quadrado"><img src="data:image/jpeg;base64,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" alt=""></div>   
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Adão Negro</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>  
                    </div>
    
    
    
    
    
                    
                    <div class="latest-inside">
                        <div class="quadrado"><img src="https://upload.wikimedia.org/wikipedia/pt/3/38/The_Batman_poster.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>The Batman</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div>
                    </div>
                
                        <div class="latest-inside">
                        <div class="quadrado"><img src="https://lumiere-a.akamaihd.net/v1/images/summer_break_pay1_brazil_fe11aaf3.jpeg" alt=""></div>   
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Pantera Negra</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                        </div>
    
    
    
                        
                    <div class="latest-inside">
                        <div class="quadrado"><img src="https://br.web.img2.acsta.net/pictures/21/06/10/20/47/1652456.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Free Guy</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div>
                    </div>
                
                        <div class="latest-inside">
                        <div class="quadrado"><img src="https://www.sonypictures.com.br/sites/brazil/files/2022-03/KEY%20ART_SPIDER%20NO%20WAY%20HOME.JPG" alt=""></div>   
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Homem-Aranha</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                        </div>
    
                        <div class="latest-inside">
                            <div class="quadrado"><img src="https://br.web.img3.acsta.net/pictures/22/02/14/18/29/1382589.png"alt=""></div>   
                            <div class="heading1">
                            <br> 
                            <div class="nomefil">
                            <h4>Doutor Estranho</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>




                        <div class="latest-inside">
                            <div class="quadrado"><img src="https://br.web.img2.acsta.net/pictures/23/04/03/19/45/2854005.jpg"alt=""></div>   
                            <div class="heading1">
                            <br> 
                            <div class="nomefil">
                            <h4>Super Mario Bros. O Filme</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>




                        <div class="latest-inside">
                            <div class="quadrado"><img src="https://jardimdasamericas.com.br/uploads/2023/03/capa-filme-65-ameaca-pre-historica-aa446-large.jpg"alt=""></div>   
                            <div class="heading1">
                            <br> 
                            <div class="nomefil">
                            <h4>Ameaça Pré-Histórica</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>
                        
                   </div> 

                </div>
        



        <!--Add as fotos das series-->
        <div class="titulo">
            <h1>Séries</h1>
        </div>
            <div class="latest-inside">
            <div class="main">
        
                <div class="latest-inside">
                    <div class="quadrado1"><img src="data:image/jpeg;base64,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" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>A Origem</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
            
            
                    <div class="latest-inside">
                    <div class="quadrado1"><img src="data:image/jpeg;base64,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" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Você Radical</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
            
            
                    <div class="latest-inside">
                    <div class="quadrado1"><img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/615MPacH9qL.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>The Office</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
            
            
                    <div class="latest-inside">
                    <div class="quadrado1"><img src="https://images.justwatch.com/poster/250937987/s332/temporada-1" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Chaves</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
            
                    <div class="latest-inside">
                    <div class="quadrado1"><img src="https://img.elo7.com.br/product/zoom/1EE24AD/big-poster-do-anime-one-punch-man-tamanho-90x-0-cm-lo029-decoracao-geek.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>One Punch Man</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
    
    
                    <div class="latest-inside">
                        <div class="quadrado1"><img src="https://pm1.narvii.com/6580/1361d7396f32cb8934c182dfb319a979230f96f9_hq.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                            <h4>Apenas um Show</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>
                



                        <div class="latest-inside">
                            <div class="quadrado1"><img src="https://media.fstatic.com/1JnMV73sY8JTm1V5E63isHjG-AQ=/322x478/smart/filters:format(webp)/media/movies/covers/2010/12/2a29ff3f8c6ca38ceb76cf9955375928.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>Drama Total</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div>
                    
                    
                            <div class="latest-inside">
                            <div class="quadrado1"><img src="https://i.pinimg.com/originals/63/3d/c9/633dc925f09f8fc8867ee9d3dea94287.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>Rick and Morty</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div>
                    
                    
                            <div class="latest-inside">
                            <div class="quadrado1"><img src="https://img.elo7.com.br/product/zoom/26A88D6/big-poster-serie-uma-familia-da-pesada-family-guy-l01-90x60-serie.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>Uma Pamília da Pesada</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div>
                        
                    
                            <div class="latest-inside">
                            <div class="quadrado1"><img src="https://www.themoviedb.org/t/p/w500/h7Deh3JXZVuhUf5qi6ZiZf6MjQF.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>O Último Cara da Terra</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div>    
    

                
                        <div class="latest-inside">
                        <div class="quadrado1"><img src="https://media.fstatic.com/1JnMV73sY8JTm1V5E63isHjG-AQ=/322x478/smart/filters:format(webp)/media/movies/covers/2010/12/2a29ff3f8c6ca38ceb76cf9955375928.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                            <h4>Drama Total</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>
                
                
                        <div class="latest-inside">
                        <div class="quadrado1"><img src="https://i.pinimg.com/originals/63/3d/c9/633dc925f09f8fc8867ee9d3dea94287.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                            <h4>Rick and Morty</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>
                
            


                        <script src="menufic.js"></script>
                        <script src="api.js"></script>
                        <script src="./js/sweetalert2.js"></script>
    </body>
</html>