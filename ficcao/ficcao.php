
<!--Pessoal tem muitas partes repetidas nesse código intt pra ficar mais facil fou comentar uma so no começo e as outras seguem o mesmo padrão-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficcao.css">
    <title>TECH MOVIES-FICÇÃO CIENTÍFICA</title>
      <!-- linkando o ícone -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
   <form>
   <header>
 
    <nav>
        <img class="logo-img" src="TECHMOVIES LOGO 2.png">
        <div class="logo" >TECH MOVIES</div>
    
    
        <div class="divBarraPesquisa">
            <Input class="barraPesquisa" name="pesquisa"  placeholder="Pesquisar">
                <button style="background: transparent; border: none;"><img src="./barraPesquisa/ImgLupa.png" alt="Lupa" height="20" width="20" ></button>
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
            <source src="fundogalaxia.mp4" type="video/mp4">     <!--fundo de tela-->
        </video>
        </div>


          
        <div class="texto">
             <center><h1>FICÇÃO CIENTÍFICA</h1></center>   <!--Titulo da tela--> 
        </div>



        <!--Add as imagens dos filmes por links e Add os titulos dos filmes -->
           
        <div class="titulo">             <!--Titulo separado que fica no cantinho (ele ta vermelho)-->
            <h1>Filmes</h1>
          </div>
          <div class="latest-inside">    <!--Esta classe e responsavel pelo espaço onde vai os elementos dos filmes-->
            <div class="main">            <!--Esta classe e como a anterior ela engloba os elementos onde estão os filmes ela e a parte preta  a diferença dessa para a "latest-inside" e que essa latest-inside ela e invisivel e como se fosse somente o espaço pre definido, se tiverem duvidas da uma inspecionada na pag-->


                <div class="latest-inside">   <!--Este e responsael pelo espaço em que somente a imagem do filme ocupa ou seja so o quadradinho com a borda azul-->
                    <a href="../TelaReproducao/TelaReproducaoFiccao/TelaReproducaoFilmes.php">                
                    <div class="quadrado"><img src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/96d37d6eafb78a7bb5dce1fdccbd5df85f9001fabb50a72daca22792c3f7c667._RI_V_TTW_.jpg" alt=""></a></div>  
                <div class="heading1"> <!--Essa classe e responsavel por controlar os efeitos dos nomes dos filmes/series e as estrelas de uma so vez, e como se fosse uma classe mãe que eu mecho nos 2 elementos de uma so vez-->
                <br>
                <div class="nomefil"><!--Esse e o mesmo que o citado acima so que ele so edita o nome do filme-->
                <h4>Cavaleiros do tempo (Cronus)</h4>
                </div>
                <div class="estrela"><!--Esse edita so as estrelas-->
                <p><span>&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>  
                <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                </div>
                </div>
                </div>
        
                <div class="latest-inside">
                <div class="quadrado"><img src="https://2.bp.blogspot.com/-RSBCPGIIZys/WlzuYRnF9TI/AAAAAAAAmK0/2-pBfTD73kIY0bDxVqP0klQWElRhkDr2ACLcBGAs/s1600/inter01.jpg" alt=""></div>
                <div class="heading1">
                <br>
                <div class="nomefil">
                <h4>Interstellar</h4>
                </div>
                <div class="estrela">
                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                </div>
                </div>
                </div>
                
                
                <div class="latest-inside">
                <div class="quadrado"><img src="https://2.bp.blogspot.com/-nuoBwZOM_f0/V4km3Cnhi5I/AAAAAAAAhAk/ftSLMpUp4sQC-zEf0NzAwvBJ1QkNG4iIgCLcB/s1600/01.jpg" alt=""></div>
                <div class="heading1">
                <br>
                <div class="nomefil">
                <h4>Circulo de fogo</h4>
                </div>
                <div class="estrela">
                <p><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>  
                <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                </div>
                </div>
                </div>
        
                <div class="latest-inside">
                <div class="quadrado"><img src="https://cafecomnerd.com.br/wp-content/uploads/2021/01/orbita-9-ficcao-cientifica-com-clara-lago-e-alex-gonzalez.jpg" alt=""></div>
                <div class="heading1">
                <br>
                <div class="nomefil">
                <h4>Orbita9</h4>
                </div>
                <div class="estrela">
                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                </div>
                </div>
                </div>




                <div class="latest-inside">
                    <div class="quadrado"><img src="https://4.bp.blogspot.com/-SReqU024JaM/V-lGZFZ09vI/AAAAAAAAhpg/QaHRuu_HUbQoeYRg_1mxqpdE4XRPjRlxACLcB/s1600/01.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Star Trek:<br>The Future <br>Begins</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>




        
        
                <div class="latest-inside">
                <div class="quadrado"><img src="https://1.bp.blogspot.com/-KtJWRBOPms8/XbnEynigT9I/AAAAAAAAt4E/_VlmJWSka50zyW_YJk2UvZjD_J6r2UgDQCLcBGAsYHQ/s1600/jupiter01.jpg" alt=""></div>   
                <div class="heading1">
                <br>
                <div class="nomefil">
                <h4>O Destino 
                    <br>de Jupiter</h4>
                </div>
                <div class="estrela">
                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                </div>
                </div>  
                </div>




                <div class="latest-inside">
                    <div class="quadrado"><img src="https://woomagazine.com.br/wp-content/uploads/2018/03/Aniquila%C3%A7%C3%A3o-poster.jpg" alt=""></div>   
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Aniquilação</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>  
                    </div>


                
                <div class="latest-inside">
                    <div class="quadrado"><img src="https://s2.glbimg.com/ieDvx8c4kIJDYDu5f5p9Hki7BEw=/362x536/https://s2.glbimg.com/ZTU8bAgO2dLWdxAU5CKL0M7Mkw0=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2020/O/J/AsVCwvRfAzi8EFbVBUbg/2020-914-passageiros-poster.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Passageiros</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div>
                </div>
            
                    <div class="latest-inside">
                    <div class="quadrado"><img src="data:image/jpeg;base64,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" alt=""></div>   
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>Cargo</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div> 
                    </div>



                    
                <div class="latest-inside">
                    <div class="quadrado"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAxKjPzyM9qv-3in0kXRpfXEbD3yNQkhyvQlxPaHw602kHUU5d0LPMd7C6Gqd6Qhts__0&usqp=CAU" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>2067</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div>
                </div>
            
                    <div class="latest-inside">
                    <div class="quadrado"><img src="https://universosesquecidos.files.wordpress.com/2020/03/poster2.jpg?w=584" alt=""></div>   
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                    <h4>The Beyond</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div> 
                    </div>

                    <div class="latest-inside">
                        <div class="quadrado"><img src="https://poltronanerd.com.br/wp-content/uploads/2018/03/MV5BMjM3MDY2MjE2OF5BMl5BanBnXkFtZTgwNDg3MTA4NDM@._V1_SY1000_CR006631000_AL_.jpg" alt=""></div>   
                        <div class="heading1">
                        <br> 
                        <div class="nomefil">
                        <h4>Titan</h4>
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
                <div class="quadrado1"><img src="https://br.web.img3.acsta.net/pictures/22/11/30/19/53/5856320.jpg" alt=""></div>
                <div class="heading1">
                <br>
                <div class="nomefil">
                    <h4>The las of us</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div> 
                </div>
        
        
                <div class="latest-inside">
                <div class="quadrado1"><img src="https://i0.wp.com/vivendojunto.com.br/wp-content/uploads/2017/11/stranger-things.jpg?resize=750%2C500" alt=""></div>
                <div class="heading1">
                <br>
                <div class="nomefil">
                    <h4>stranger-things</h4>
                    </div>
                    <div class="estrela">
                    <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                    </div>
                    </div> 
                </div>





                
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://br.web.img3.acsta.net/pictures/20/03/04/11/23/1560575.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Altered Carbon</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>

                    

                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://m.media-amazon.com/images/I/81UcD17TMrL.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Black mirror</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>

                    



                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://i.pinimg.com/736x/5f/4e/61/5f4e61600201742ddbfaaab54af667fd.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Dark</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>

                    



                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://cafecomnerd.com.br/wp-content/uploads/2021/09/INVASION-Serie-ficcao-cientifica-com-Sam-Neill-trailer-divulgado-Apple-TV-Plus-Poster.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Invasion</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>

                    



                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://www.sonypictures.com.br/sites/brazil/files/2022-04/UNCHARTED%20KEY%20ART.JPG" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Uncharted-Fora do Mapa</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
    



                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://upload.wikimedia.org/wikipedia/pt/e/e7/The_Mandalorian_season_2_poster.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>The Mandalorian</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>

                    

                    
                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://br.web.img2.acsta.net/c_310_420/pictures/19/12/04/22/35/3436063.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Vikings</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
    





                <div class="latest-inside">
                    <div class="quadrado1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlX6WY3Wfb5cXC1hZL04obwVeVt5VD9k-y8aKqkLTZbcDmKq0ezgI2NPZ6zQcuqJ9cM7I&usqp=CAU" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>The Feed</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>





                    <div class="latest-inside">
                        <div class="quadrado1"><img src="https://poltronanerd.com.br/wp-content/uploads/2018/03/LostInSpace_Vertical-Main_PRE_POR.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                            <h4>Perdidos no Espaço</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                        </div>





                        <div class="latest-inside">
                            <div class="quadrado1"><img src="https://previous-assets.menshealth.pt/files/2050/04/Lost-1-200x300.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>Lost</h4>
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