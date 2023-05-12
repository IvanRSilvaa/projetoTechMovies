<!--Pessoal tem muitas partes repetidas nesse código intt pra ficar mais facil fou comentar uma so no começo e as outras seguem o mesmo padrão-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comedia1.css">
    <title>TECH MOVIES-COMÉDIA</title>
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

        <!--Cria os links do menu-->
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
            <source src="funny.mp4" type="video/mp4">     <!--fundo de tela-->
        </video>
        </div>


          
        <div class="texto">
             <center><h1>COMÉDIA</h1></center>   <!--Titulo da tela--> 
        </div>



        <!--Add as imagens dos filmes por links e Add os titulos dos filmes -->
           
        <div class="titulo">             <!--Titulo separado que fica no cantinho (ele ta vermelho)-->
            <h1>Filmes</h1>
          </div>
          <div class="latest-inside">    <!--Esta classe e responsavel pelo espaço onde vai os elementos dos filmes-->
            <div class="main">            <!--Esta classe e como a anterior ela engloba os elementos onde estão os filmes ela e a parte preta  a diferença dessa para a "latest-inside" e que essa latest-inside ela e invisivel e como se fosse somente o espaço pre definido, se tiverem duvidas da uma inspecionada na pag-->


                <div class="latest-inside">     <!--Este e responsael pelo espaço em que somente a imagem do filme ocupa ou seja so o quadradinho com a borda azul-->
                    <a href="../TelaReproducao/FilmeCom/TelaReproducaoFilmes.php">  
                    <div class="quadrado"><img src="https://upload.wikimedia.org/wikipedia/pt/a/ad/Cartaz_AQASNS.jpg" alt=""></a></div>  
                    <div class="heading1"> <!--Essa classe e responsavel por controlar os efeitos dos nomes dos filmes/series e as estrelas de uma so vez, e como se fosse uma classe mãe que eu mecho nos 2 elementos de uma so vez-->
                    <br>
                    <div class="nomefil"><!--Esse e o mesmo que o citado acima so que ele so edita o nome do filme-->
                    <h4>Gente Grande</h4>
                    </div>
                    <div class="estrela"><!--Esse edita so as estrelas-->
                    <p><span>&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>  
                    <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                    </div>
                    </div>
                    </div>
                    <div class="latest-inside">
                        <div class="quadrado"><img src="https://i.pinimg.com/736x/5d/72/31/5d7231a92eafb2d1dd3b415a347e2892.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Não Aceitam Devoluções</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                        </div>
                        </div>
                        </div>
                        
                        
                        <div class="latest-inside">
                        <div class="quadrado"><img src="https://i.pinimg.com/736x/5e/d8/02/5ed8023f49e65bf2c82613ae792d74d2--funny-movies-jack-nicholson.jpg" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Tratamento de Choque</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>  
                        <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                        </div>
                        </div>
                        </div>
                
                        <div class="latest-inside">
                        <div class="quadrado"><img src="data:image/jpeg;base64,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"" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Minha Super Ex-Namorada</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                        </div>
                        </div>
                        </div>
                
                
                        <div class="latest-inside">
                        <div class="quadrado"><img src="https://br.web.img2.acsta.net/medias/nmedia/18/90/21/81/20086182.jpg" alt=""></div>   
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                        <h4>Zumbilândia</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela sem cor-->   <!--&#9734 Coloca a estrela com cor-->
                        </div>
                        </div>  
                        </div>
        
        
        
        
        
                        
                        <div class="latest-inside">
                            <div class="quadrado"><img src="https://br.web.img3.acsta.net/medias/nmedia/18/94/14/75/20420264.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                            <h4>Inatividade Paranormal</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div>
                        </div>
                    
                            <div class="latest-inside">
                            <div class="quadrado"><img src="https://br.web.img3.acsta.net/pictures/14/12/17/17/54/510455.jpg" alt=""></div>   
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                            <h4>SuperPai</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                            </div>
        
        
        
                            
                        <div class="latest-inside">
                            <div class="quadrado"><img src="https://br.web.img2.acsta.net/medias/nmedia/18/95/45/36/20405014.jpg" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                            <h4>Vai Que dá Certo</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div>
                        </div>
                    
                            <div class="latest-inside">
                            <div class="quadrado"><img src="https://i.pinimg.com/736x/75/5d/e3/755de335841c2cc528249f228b062b03.jpg" alt=""></div>   
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                            <h4>Lascados</h4>
                            </div>
                            <div class="estrela">
                            <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                            <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                            </div>
                            </div> 
                            </div>
        
                            <div class="latest-inside">
                                <div class="quadrado"><img src="https://www.cafecomfilme.com.br/media/k2/items/cache/7c7b96f53ac4e184df929c559e57af26_XL.jpg?t=20210730_161109" alt=""></div>   
                                <div class="heading1">
                                <br> 
                                <div class="nomefil">
                                <h4>R.I.P.D Agentes do Além</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div>


                            <div class="latest-inside">
                                <div class="quadrado"><img src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/d8a57cfb439b21bc916fc1e64a08c67b963b53c665e3dfec88d02754a543c661._RI_V_TTW_.jpg" alt=""></div>   
                                <div class="heading1">
                                <br> 
                                <div class="nomefil">
                                <h4>Sherek 2</h4>
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
                                <h4>Gato de Botas 2</h4>
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
                    <div class="quadrado1"><img src="https://www.estadao.com.br/resizer/CzeOSpJOtIFSuvDIoAPrlzpdSjc=/320x448/filters:format(jpg):quality(80):focal(-5x-5:5x5)/cloudfront-us-east-1.images.arcpublishing.com/estadao/KNY4FR2YCVJ6RMWBZDTAT7YG5Y.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Um Maluco no Pedaço</h4>
                        </div>
                        <div class="estrela">
                        <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                        <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                        </div>
                        </div> 
                    </div>
            
            
                    <div class="latest-inside">
                    <div class="quadrado1"><img src="https://i.pinimg.com/originals/f7/ee/41/f7ee419bfc506d44ba3687fbd6f37166.jpg" alt=""></div>
                    <div class="heading1">
                    <br>
                    <div class="nomefil">
                        <h4>Os Simpsons</h4>
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
                        <div class="quadrado1"><img src="https://m.media-amazon.com/images/I/81nMXaMlNBL._AC_SL1500_.jpg" alt=""></div>
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
                        <div class="quadrado1"><img src="data:image/jpeg;base64,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" alt=""></div>
                        <div class="heading1">
                        <br>
                        <div class="nomefil">
                            <h4>Uma Família da Pesada</h4>
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
                            <div class="quadrado1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnVpMr48r-sGJyCSbHuyyGFqBuz8nIrvR2BgjifUYIMSeBmjtyFdEsxTLLc4Y2oBloth8&usqp=CAU" alt=""></div>
                            <div class="heading1">
                            <br>
                            <div class="nomefil">
                                <h4>Velma</h4>
                                </div>
                                <div class="estrela">
                                <p><span>&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>  
                                <!--&#9733 Coloca estrela-->   <!--&#9734 Colore a estrela-->
                                </div>
                                </div> 
                            </div> 



                            <div class="latest-inside">
                                <div class="quadrado1"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYGBcZGSEdGhoaGiAjIRoZIRodHSAgGiAcICwjGh0rIBoaJTYkKS0vMzMzIiI4PjgyPSwyMy8BCwsLDw4PHhISHjIqIykyMjQ6MjIyMjIyMjIyMjIyMjIyMjIyLzIyMjIyMjIyMjI0MjIyMjIyMjIyMjIyMjIyMv/AABEIAPsAyQMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgEAB//EAEsQAAECBAMFBAcECAMFCQEAAAECEQADITEEEkEFIlFhcROBkfAGMlKhscHRFCNC4RVTYnKCkrLxM0PSY3Oio8IHFiRUg5Ozw+JE/8QAGgEAAwEBAQEAAAAAAAAAAAAAAAECAwQFBv/EACsRAAICAQMEAQMEAwEAAAAAAAABAhEDEiExBEFRYRMikaEUMoHRcbHwI//aAAwDAQACEQMRAD8A1+zJgfs56Ms2jZjmzcBncubUofBy5lS0pGVLMLAG35RjcViwCnsyAopCnUpjYjKyQfEXNjxL9Hscc2UITndTpNFqqSAksAWrfh4YY8i4/IjVNHCmPSlEiqcp4fmIkox0pgVtESItMcIh2FFTRwiLCIiYVgkUKaKZqjpSC8sCz0HSJcqLUbYKucLE+EUFYNRpxi1WFipcghzUNFxkTKJYhT3jxA4v0hQmec2YuQ9RW0OjhnAIqDUHlFLIToIhPOOFPSJ9iWiH2dUPWLQUrI4wMsjhBn2NTxM4SKUiXEWhHGkWhB0aCVYCIHZ5FjD1hosoWiKCoQV2Sk2c9YiZB1pFxyWRLG0DtHMsEGUBrAyneLUyNJ3LHIsMonlHuxPGHqFQu2flmqTLCalJO/VlBJc2FKFraB4b4XZctQHaJmS6FphokEH1WVvSwyqAkOOLCM3g2JSlSsuViDVnHAkkjXX6RopSJXqrWtQcEORVTUYpDg3sdY+bx5Yx2aOqG4ZKmHCzMqkzezYB3zIJram7bi9OdNGhWYOzcKguNCCLiBMDtCURkzqdmyrAfh+EawxYWjvxSi1s9imqKSiPZYtKYiUxsIryxwiJkR5oYFZEcKYsaONBSGUdkIG2icssln725/KD2gDbFJauh0/ZMTLZDW7MsrFyt5RQpyKnedmzfBJPdGi2TNK5bkNlUUjoGZ+dYzKcOlSSGX6pBYfsLFm4KPuGsavZrAzEAMAQe8u/9MKOzE7aCMkRKIIKYiUxqIGUkxSsq5DnB2WBcQpy3D3nieQiJz0ocI6mINsTlhWXtFJ3HABI1Nd3ugJC5hLCbMNW9dfsgwy2pJdb5UncuSxNTzFPygPEAIBsg8amjDV2EYyyaY6mU4rVSIp7Q/5i7h3WrhW8cKF6zFWF1njX3QuXPK91DrKdbA210GvPlQRUpFF0U5oagU4AjdI91YxXUS5oHFDCZOyj/EWb2J48SegiPakgntFC4qo0Le/ugHEzQwSEpAfRRJDn96vIQLOnks6QKMb9RlDskjjGkckuUzOhwqeoAkTFFjbMTQCtNYs/TUz/AMufERnUECrrBdgMzhmNXOrtZmgbOPaPvjRZZhpQUjEBOb1mpU0PN638KWi9GKBqFEKNku4tq5Dk+XiQQhO+hNQlwsFJrRqhzwiEgIAzEIe7jMa3FCWd/NY8fUq4EtgiVtFSVApoRxrWliwb3Rodn7bIKTcvUlRuTyuOLvGclqRMJ+6SXoFhRFdGSCA+tB1vFKFGWSFBi7A6E0tx6f2gW/7dmaqR9Swm1ZcxL5g/DjSDxHzXCYtnKAWID8n40tTQ0h9s/bMwqAKnq1T3C6gD0Jf5deLq5J1JBpRq2iLRKWsKAIII4iOx6CdqySlSgLx5JBDiKceKJ745IWEy39l/jQe+J1b0OtrL2hVteYRLWeDgcjkVX3RcnaRKgMly1+PdFO2R93M6n+lUKTuio7GcOIWxIJsdRwXz/ZHhzLMsPNUMShIJCSAFB7sFgPxvC5ADKtrqn2ZnLz4wepWXEpU1j/qhrknlGnaONEcLOExOYAjSLWi7ERywvnBionn3t8vjDCapkk0oNbRn8TiVrSTlZxUZgGNrkgi/dHL1OZQXs0xoqnzO0X92jNQOpTgZXc8K3pC7FYALJHaJuSpKW4UqVUqOHGDAKErKiajKklgOL+s9uFdBqsxmNyAgICBQhw7m9STvnTxjy5Z55NjVxiuShezzLBSAtQ9pJTSg9YEs7ufnC6aklYKipKQzOlu5hQOH1PygiZtRStCABw+LdIW4mYogs7k0cUcUL9/0jXGpt0zKbj2K1zE5t2pN611c1oIFqA6gauT08OUSWAHqHbQN5tAnaDW4aztxprwqY7o7GRNKhcguz62cW0Gh80s7CXw9/wD+oXHEBRIIv9b93KJdin9d/V9IvYA6YuYpBSCELb2hpme3W7a8ojg5kyYapSCkjMQ9GbVmB80gbaExIP4UzAQSopYKSP3fWB8L8iA52IDJAqDohRZ+lwQ/i8cyx3HYzsdKx8sF6g8FAj4C1R490E4THFTIKQoPQM4e/Q0eEGGlqcvLbSpuTZnUHPMPeC5GIWgHKirkipJTRtKae+IliXYFI0yMXMfKiWQBqA4fkdPdw0gj7atBqklIbMopBbmDrpU8IRYfaS1JSUMQwcUd21cX5GCZe0ASXezGtgbhgA0c7g0+DVSNZsraSiFHtSArUkjXurWH+AxhCqrzpU1SqgvUGMBs+cgf4ajWodTN8OlffGrwuJCwRqEhxwNbkUjr6bMr0srk0WKIJDFw2nWB1qHZqS4cqBA7xFWATud5+USnDeEdVrUV2AMWopKSm78H9lvjBOLWVSMxuQ50qUKNtIp2gj1evzRzi+cn/wAOBwSB/wAs84HyAmQk71Trqr2ZnAeacoIxoImPr+ZiKEXpodDwmc/Pg12OT94e7+qK7k9i7Z+KXlNQzjTiHh4mYEoClECgJJ6Qg2ejdNOH9I5wj2ri5qlAKUUgORpRLEBiWFvjVqxnkyaOOWOrG+1tolS9xyili760Gh60+MLsROAISLAuGUal65qMeJLuelALLQkJzKUhSzQkpzCpswcbtBxccIX7d2giRLUtDKUoEIZwco3VKLC2keXJPLkNYLsCba9KEJmGVLdQSzqdgRR21djSvCkLl+kqc2VbED2aEcjfy/et9E8F9pxDrI7OWMy3oLuA+lXjfbX2Ng1ArUJRAG8QQR3ka++Oz48cPpo1UNSsSpmylJBRUK9VTmprwo3IQHj5pIBC8oHv5XcGFGx8Z2cwyHdIUrI+mouaU6QbPQUuqZdmFaU1YG78YpY1GRyzVFaMSCSFPWxJtQUY/KsCzludBW9gK8tGjiRTjmu9QL2buryipEwCnw4xqkZlRo7pB51u3vIirtVeQYvVMa1DyEXV5+B+sWgDp8lC1oExSmQ7AfidgznRxpy6wo2zKTLWlKEkgJrnILqvUADKWbq472eHmMADvJUWGUkEFwak08YPRsdExYmLTo1a2BYnzYhxRo5IZND+oUIOTM1KlrAcLSCEhWUaqNGDEhSt5ILjVizVrn4ecVATMxLOATVtCGulz8o28rDpQEy0gBkkBwzDXk4FXDREYCXdIDag1drVJpVILchpSD9Sr4NFiT4Mlg8UwZTqAPF6DS/xgtOORYhkngHPmkNp+xpagooAz3FLtf66d8JxgVDdUksTq4LVY1HImvAxSlCe5MsbirGWFxyiGO+k3BBs4vqnjQmHeysUXGVShl0JrlJ4m/SlGrGcw3aILGvA8u6GkmYzZgAkgsacTUFqdDHNOFPYSNgMUFAb1ScoJQ4d+4EFx7osmT1AtqLULkh+TBusZ/DzUBIOZeY0F9BqxtvUuerRb9qPJQcMSmtBQA3dtCInTe6NNQfisapKlAlS6Pc8Pw0Iah4fKAV7RUkMFLIVwV7jugG/CITZgIIc9xdlCozBRZ7czA8yQEJ3VlTXpqSTUBn6EM3dGsV55JcmaXZc0LQSRvAEG1d2ZXe4v5BMM8bKzEtqIxEnFkFwTQ61+IHDzeGf6RmEp31eN78agR0RzOKpodqhjOBlgJCne4c8NKN7oS4vFJUcqkZnN6g3cNWhvXrHZk8Vc1erOGvS1BU6UiidiFCrAAakm3Q60DnpHNOTnKx3RNePNmZLgatpy3n68ISems9sjXyAAsWAbMa63B/uYYrIawp0Fhw81hT6SSZkxImoU4CWUkgliM1Rob66gGLxQSmmaY5pJhH/AGcCWZUxBJCirfILFF8pSRYXtq8P9pYCTLkrB7SYkqBzKzKKmo2a4FTU6xi/+z9Ezt1NRJlsSRRx6jjhQj+0aj0gxSRLWlcpaVgE7rZCwuSNO540nfyUdUGtFsxuJKEYwiWQgBg+hDE1bi7eEN5ksEtxFddH16Qh2LKM6YuYoHi4sDQAeHwh4pFTwfQHX842lHc4ckrA5hZFAwNAeH5HzaBFjeoK6niePLpDPEJUzANS+tas5ioYVWVhzJ5Wdnh8GQsUoAmtRHvtH7I8Y5MQy2qNeNOV/jFVfaPjDEOEqAYAktUkBgmjVIve/wCcMEYk8XGl6nVmpy11gJCSCFWo16XsRqxr3+FwX2gcs3PSmotVzHDJJ8msa77DROJJAANaVZ7ca8dY6iYAaOpy1eLM3ua9BxgaWgihFaNwyuNBYtRufOLhL3nBdLVauvCp0FrxztKym63DSUDMSkXbTiaNxqdIyeLx2IVNmISymUWGRHqPS44EXjRGY7EVPPjreM/LP/i5nFvkmNcVxTZzdRllGDkuxWufi2dQoKl0y9Io/S80JewFtxFOlHhjtebllFtad1z7hCrYEoZ1LVUpAalnf6RrCeqDk0c2LPKWNzZd+mptyDzPZps78LPFkvb018wUSTR2Se5zDcYhAAqa2ofI74SzsKFTDlDJdz1IraFDIpcqh4+pU7tUGoxGJO8EAvrll2PDh3RecdjLZTZrIt1vEtkTXQUm6Cx+UHqmBIJJAAuTpGE88lKqOefVzjJxpCheJxRugnuR9Y6cdjB+H/hlwXL2hKUFELSQkOqthxL6RDEz0kBIWApaXTViRckFi1NWillm3Tj/ALGupy3TQH9txvs/8KIicdjfZ/4ZcQlzs5ypxCSaWUp6JSFM5eyVm77z0aIonhSsqcQFOUhO8p2GVwwYOWNXet46Pq9fZm/y5PX2YXh5+I9eavIHYAJQVKvV7JD61q/WKcdijMLG3s6ONWF+/wDsDi8SahSsxSEpdzUpYEh7jM541jiVDNfTz56846YQ2tnoY1UVfIw2FtPsJ7kEoWnKptNQr9pmbShLPDLb20JS5Jaala1u6UO6U6ZvZ6GvKM1P9Zxd/Pn50ihcxweg8HJal3JbvMafHFvUWsjS0nMMlSd5BIIao5lm59PjEp+0sQKiY44FCNf4YtVuDL0fuHnzWAZq38+fL8IpmUuAgbWxBuQf4RFo2liGajcMo+UA4SYl2KgSTSDUT0O2YPa8c83JdjjyZJp7Irm42a4zJQ5Ps6nvi3Pz95+sU4pQKksXZbHkaRc37J90ONtXRpjbkrYUrFZVEFQcPQ9A2VhaDsOgKqVHKGdtb3q44WakDytgSwGTMcvcpr0eDJeBKJYSMhIBdhzPCpufNY55uD/azVNIsmTyxrcgBupdn4MPC8SlznJINxToeAFAXDEtC/EYopS4GZyyXAD17k6CrPW8XS52YguXCAkjkaUBuHc9OJIiVi2ByGQmuRdmexD9aWvaE6A2Lmjl8cpg7DLdIOVKaVDAEFzyoLU6xTsKUhWNmiZvJEskm1uzrQ8CYqOO04ozzRc4OPkE2viEqypB9Ul/Pm8c2MhKgtKg/qn3FvnCiQ5c6FRrxDufc8E4XGdnOs6VgAjvp8w0DxaYOMTleJxxuC5NEvI4SUboB4MBy8ISYzHJlLKUJZLW5wXip0oMQkk8MtPhCOe8ybvUGvIc/H3xngx27fBHTY095cB2xceRMLkkG8P9poKpakhGd2dObLS7pNndozWHlhBJluoMa+b8enOPqOC2fJXLlr7NnQDdTuw4GLlgcsilGtvJeTC55FKFbeT55NwM9UuYliXyhAWU58oLkFSaM4DAn85T8PNWVrEvK0vJLTmS9aEuCwYE+6Npt1UjDSVTfs6pjaJKmFW3lZt0c2MTx6MPLlzFiWlapaCsoCzmoHrvUuKtGvx5fX5NPjy+vyYleySlDhRUpKClCQEpAKgxr+JnJqYpweGmoQRlUCEHK60lOY8AA4qSamNNIxKJiJikSJR7MpKldsvs8hllZIUUO6aOClq3gfGzT9mTN+yol9ojWarMkqJCcoy726y2LauzGBY8tVKmNYs1VJpmQxK6KI4v1q/fHkr18+fPSmapkkefPvjko0HTz58nridrCjPJIGvn8vdakcQAlTkHd04m7+ffFMpQBr/Zj/fv7zFmHLhQ0DD3Afl5rQzs6YTveHnz9KMbupYX+FKDzfwjmFOY1sK9eAbUkxHGrq3eYTE+CzZqFAUSqgLbyWKmpRnvzi6VglDswd4B1KFN1TOKipr1hrgUIRJTMUgHMsA1NAQ5NL2hvgcIiYjP2aQC+UZiSztVrHlGD1uVKjilrcmlRkpyGCKMorJId6k8RE8p9lXu+sNfSfCBCpAQlipStTVihtecUfZj7J/lH+qE7jsaQTih8AOHviQUBAgWeB8DFgWeB8DHnaX4Ko5icDKmesgHpT4UJiMrYMtQ3cyQkXKwAkO9SqjDhFj8j4Qu23jS2RJZKAQf2lkVfo+XujoxuXe6E5OI2lbNlrZKcQhXITJZfuCq2hBtiWvDzpwVmHaIKAQzschL8AQkjvhTtErlshbMUhQGrF7vY0inDKKlitD7gB9BHUlSsG3VsMBIYpGYWIGj6+D+XjkhlLSpRY3c99/GPdqQhSRroOHWIZMrV88BEcoxTtMfzZqEpcqSWqKip5QkElSnqwO8W1INoHCb+e6JrmENUlrMOfnxiYY9HDFjx6OGTwxKFZVkB2IPLz5463ZPpn2CDLmpXMShkpKcrgc3Icc4ykmbmNQlPTWJzZec5AWBp3xWrTKy1OpWzVY30ww+JlqkGTiFCbQhARmNQrd3jw4RZjdsSJompVgJxUUJE0ploC8pAKcygrNZII/d4CMmnYawXExiLEAgjoQYYSUYlBUpOIAKgkE5Ek7iChJBNlBJIzCpcvGn6jH5NP1GLyMMVtSQBOlTJONK5qUdopZTnyJ9UCrBLOKCtY5tzbsnEywgy58socoJSjLmZt4OdAQGsTCvEYWctRUqanMQE0lpAADkAJSwFSTQamKF4Kb+tB/gHF4l9RC9mvyJ9RC9mhdNQ4OUnnEJZNuHKNZ6ObASpps8gofdQlxmymq1cEvYC5PBgS/TzCoCZHZIAAKkZUi5UxSAB+6rxEaLJHVSO1Y24ajGJdqDV7+D6ROXKW9wD6xer/nDzC+jM1X+IsSjlJCWzKVlZ6OAWfQkwo2rhFyFAlSZiFp3JibKGoPAjgf7VrTdIThJK2geXLyXN719/wAffApnAqJIUdKcO/WOqmKPkfWIyZJJopu54bdK2Yzkktx9htqykoSFJnkJIVdLApdmc0FTBqfSOVJUpJlzk5jmykJYE8A9BCASV+2OhSCD1BoRFC9nklypz0/OIU4IxU4cs0GKx4xy5KZaVpyK3naylJqGOmUxpv0Cr9cr+Yf6o+bmSZdlet3W/vEM3M+MTJandlW3+3g2J2ziEj/NHQj6xxG3J6mA7V+76wWcNMI3sqepLCnBuETk4Us4UMzUYEB6fL5RobUgb9L4ig+8qdcv1jM46fnLD8Sj3uon5xtFyAA+orUm3f0+MYHDn7yW9s6X6ZhESVtGU47oO9KJq1TQVggiWAxa2ZRFqawrw6makO/TTJ24yPl7NLOX/ErmfCFGEUk0VRhoIqXAT4YWnFAD1ff+UeXPCrg+P5QwXs6WmSiYSvfJow9XQt62hra0exGz5aEoLrzKFQwLeq1qj1tYxquxkoVuLUKSCCxpzF/CLFTks2WnX8oaT9lyxMTLClVCXJAoSSC5SWApHv0XK7fssystd5xYIzXs9IGmytFsVIUkAsD4/lExNDgsac+HdDDB7OlrmLQ6hketLgsL0iGFwUtcuYveGQOH140Ir5vCp+A0Wc/Sh9geMeO0/wBkeP5RaNny+xM4lTZmbW7WveOYrAy0S5cze39Lkailw9bxn8UfBn8EPBSdpn2R4wTLxAVJXMJZSVMEN6w3XOZ6etZtDFeM2aiWtCMyjnYUYspwGpa4vFU7CpTPTISs5FVJccCb20aKWKN8D+CPgNw3pGEJDukhgwDimVIPPKMym4ws2vtNUyamYFEZWKE6JFwW48Xv3xObgEZ1JBbKFM9lF2A5gvpCTM5c3MdGNRrg7Y5JOOlvg+gbCUqcqZOKiiStYWhBLqSsNmUhX4EuFJpcEimrXaezpSpZK0hSSozCASN43UCDRRe7e6kZ7YGLT2CE594A7vDeN+EaBSyqWR4iOebakd0EpQ3PmuNlplzVouAaE0zJNUlQFizOwvAyJpSbUuK/PUQ02/LdYXoRlJ4KA16gDwMLsBJC5iErcIJu7UrqaAOLx1upRPOyR5TLPtp4R37WeAgyXs6X2q5alEBLspxWoapu4Lx7CYCWsTASoLSBlTTeVVwxqTQM0ZaI+DD44+BXPnlVwzQI8FYhABAr3wNGkao0iqWxu/tJUQnO/CqvrSCZeLQEjeBP+8LeOegpAidkTgXBQGOn5iIy9jTU2KD1enhBRpZdjJsyYp0JOVnO9QUrUqY6xjCtik2Yg+BfWNorZ+IYuJYDVqr5xiky8ykJAfMoADi5A0hVuZy3aDp+NTMVmmEqLZbJFP4QIolzEJLjwKQR3h698d2vguymZN0KAqlKipi5oXqC2kNdn+j+eWhfZg5g9VqHuApD0+w0+wE48FTkuPZKE5R0SKPzLx049JVmUX4JKU5R0TZ+cMl+jh/Vob/eL+Y+kVo2AVVEsNxzlj05QafYafYD9uBUVKU50CkJIT+6mw6xxO0GWVlTq0dKSE/uiwhkPRs/qx3LPzERV6Pq/U/8yDT7DT7F8vHMsrzOo6lCSw4JFkjpEpWNCVKXmJUqhJSksOAew5CDhsAn/JA/9SPHYP8Asj3TB84TXspY5S4AJGNCCpQUSVmpKUm1hWw5dI9h8YE5iFF1qzKdKS5rx6mDTsBV+zYcO1EST6PrNpTvYBbmFXsbxS7pgOGxiUPlUaqzOUpNacbWiqTNQkAAks7OkFnDEdPqYc/92Jo//lWfGIL9GZxZsMscXc+EPT7J0+xXLnpSnI5Ka3Sk0OgJqIGUmWzBRfoIcTvRqakOqUtI4sR8YrRsNQvLUe8fWDT7DT7GHoTMA7QEB3S55EEAdKHxjWYcghSNQ7dNPc0ZrYGF7MzDkKfVuf3vzgpONCJ7V3hfmI58kbkz0MMv/NWLdpYV+0SdfcdD4xlpamoaHjRwesb7akuub2hWEyNgqWMwlAvV816l6aVjXG7Rz547mfM4cT1YP4iL0Y8Ah95I/CQK0a4qONId/wDdxTVkgn98WihewVD/ACPBYjSjn0+xccelRdSQpPsEPRmop8w6gvHPtEj9SP5l/wCuCZ2zCJalCSQwLnMKMKuLuOEId6Eoip+T6wCeXh9S0QKxx9/0iozB/eseVPjagJrVunpz+cfM1XT1Hxj6JMmEg28eUYLE4RaWJQoAM5ILCrXjOS3Qu4bsbBJmzMgNklSiBzAYc6xssNhghISFFgKB4xvowtpi9Nz/AKhGmTMJICQ5NgBXuaKSHQxUhNXqDcEvHjOA4d8dk4CYr11BPIbx72oPEx2bKkS/8RRJvUlz3JakdK6Wem3svexssEqt7L2R7Y6Ze/5ikeQuYTQAn9kW/miSESpiR2Qyl61O6HuQ+unHxjmLxjJKZYISmhULCvGwJOsJYElqb29dxrElu3t67ksFMedLQoue0SCCf2xRhTjH0bEbMlF8qUEK7RJfKGXMUggB9QCWF+EfL8Hh1LYpoHoefLj3RMGYSoAqUEOVEGgIDkudQAfCOeeOXNbF45pR3bW77H0ufhpTk5EOglb5EgGkyUEENvFJUkubumEO3pCkzcOoSyr75aWUhKAv71OVBplYpDAm6a6mMWcWr2z4xw4pRusli9WI97vEaGX88FdNvZrjya6YVmWtJGclMwpeWAovhEzE5kgevvOQPxPDhUhPaTXlSyElPZvLTrNOZt2tQj3cY+enaK3zZkku79nLd+L5b848NpLpVNLfdy6Vem7xAMaUchqNqrHYpUqQhO7KUrcSM6ly3KgWdKwrMlSToAYQqny/wywOpA+UCTceVhlEM+aiUje4uAKxSJg4wqAYKW6SWFxbhva98INtqYgi4r3w3lr3SH4H4/WE+0QFTUp0cP0FT7o55L6zrhKsQ3R95LrcCvIxDZ+KUlGVvVJ15v8AOIysTkU70ND9Y7iJYQoqHqqhxWmdEzfyQtdg77UeMQOJI498LzOHL4+fGIKnDj8vz98b0cwcvEAhQMtJCgyrhwzceEKP0PI4TP5x/pi/7QnjHPtKOfugoR0zFH+8RUtete/84rWrn5+UQC61ixF6F8/l84C20vNKKQDmUzVuxBLDpF4W9r8Gv9IU49cyY3aS1uKDL6rG/dEy4DcE2PN7OYc1CU5RzJI+kPZGO7OYlbPlLtmIrzbTiNbaxmTh10ZKqdzdKmNXsHES5csJRLmzJ5qTlBa+6hiSgB6qZzyAisat09iktxrI2nPml5coZfaWTl71EAK6AEwyEiXmdMtGYkF1JBq1aqFubDiYAlLxC1ArSiWn8TrzKZtMrtpcCLsSiVldecgfiBytXQgEvzpHp66aTTk3tbpJf4N3laatN+3SROTMlIUuUg+0s95YPb2gAnQB2Ll6TtGSpQlkgitS2QMCQGsagUtXiIWYeZhytKEyiok+tMJNbuQ7E/wwznIEtCigJR+6lI1F2FY55dVGElibVtrZK/4M59RGElB8snO2ikD7tKppZmQksKWzJ5UYQsxBxEwAFGRNgmiB4KI8KCgpB2z5hXLSqYSpRepJ9ojSEXpAjLN3QAMqS3MoSaeMcz6n5pySvb+DFdSsk3HwWnCrF1Sh1my6UerKJgcTOJjU+imzpUzDJXMloUrMoOQCaKpWFMnDS/t02XkTkCSQlqCqbeJjmWdPVtwZ/Mre3AAFJ4nxiztE84Z+kODly5GdCEpOdIcDQgxmE4jlF48iyR1IvHNTjaD1TBoYiZo5wf6MS0TDNzoSpsrOLPm+gifpNh0o7ISpYBWVBkipO4APfEPMlPTRHzR16O5XsqZmWUsRu/8AUmAcStpqi9vnGq2bslMtCczGY28rroOQ994zO38TL7XJLlgMC6hdZ17hTxMZQyKeR0tka4+qU4uKT279gZU4Q4wk8KQlJrT3Rm1KMW7KxRSsoJ9aqOdnHXXxjbJG1ZvhnpdeQzFIVLVlI/d5jlFJUT+cOV/eJynuPA8RCeY6VFNDlLFqw8clJexZcbi7XBApPEd0cby8cxCVKSySQdDAHYTfbHvjQx3HisIdI5kIuQO+LFL4l+/6NHErAsB3CGBNCRf4RCcUx4g6ee6KlrVVx4f3gGeUUtHcPjjLzFASSoAORYXp1LeAgWdMbgH0gVS1GwPw+MOMnF2gTa3Q22bipkzESwpZIJNLD1SbCNTiJAWkpVY/WMVsUqE+Wo6E/wBJHdGtxM3MlSRqB8QY4c+vJ1EFqptrfwcPU3LNFXu63K5GyZaVhSSXFnMHbSwrSVngB8RGT2dil9ugFaiM9iesa3FTc0taXuPmIh45Q6qCb1bkuDjmipO9wLYGFKpCCOKv61CEHpUgieRwSj/40Q79EdpgS+yVRSSSH1BL07yYu23sD7TN7REwIJACgQSKAAEMaUApDx5VizT17X/ZcJRx5ZX3GPoJJJwaOal/1kQrw2FJ2pNQBXs1fFMbP0ekIwuHRLBKsrl2qpSiVFhzJjKbFxYXteasMR2a0uLFW47cncd0RjprJJcNEx31y7HvS3ClOGr+sT84wpRH1P0owycTL7LPk3gXAe3JxGQX6LpH+er/ANsf64rps8I41FvfcvDmhCNNnPQ1FZzf7P8A+yNEcMkrQtQdSM2XlmZz1ZLd5jN+iczs14hJ0KQ7XYzBB23drmWkaB6q4AEUA1UdOWY6Rnli5Z2k/wDqMM0HPPUeX/Qy2hMIlqbh7tY+aYmb9+q9KfX4mN5K2gmYkKSQoHXQ6GMZtDA9nPUalKt5PeXYm1C48I06R6ZOL5R0dJkpPE1umdQgKFSB1gTFSacxUQX2hPARWuW8egdgINo4hQy51NyYeJZz3mCsDh1JYlXcNev04xX2RgiUSBEpJDcm+QvI+pPWJdmPLxQlZiecwxBRRHAQNYgtBFU24E/D8/GKVzCaVfgaGGSEmdEVTCeECFUczwAWrXFCyfLR5a+LdYqUvhAUFYCWuZMSiX65dnIFklRqaAAAwxQjFjtqMcP/AIvq7txTRXqmzjxEJsPiFy1haDlUl2LA3BSaKBBcEhiDeLftsz7x15jNLzcwSrOXUQap3SCpTFLEPCWztck0rugpGBnAyFgVxCmk1G8oryfw7xasG4eVjVrmoRVUpu0Dpo5YX9asKU4xYVLUFEKlN2ZpuZVlaWo1FKJq94uw21JspS1S15CuisqUAEMUswSwDKIYAXg733CldnRhZolJnktLUopCgQ5UASaPmH9uIdvLlY1M1EgKPaKCikZkkbnaBYzAs6TKmAh3dPR0wxkzs+yzfdvmysKkOzlnIGZTAlg5pFk3as1SxMUslYSpIUAkUXnzWDOe0mEm5KiXesJxT5VicU+UMV4vGrTNTnOWVSaEkAjeKGcF1VCvVowJtWANkJmdo0k5V5VFyUgZUpKlOVFgGS/dEP0rNAmgTFATSTNFPvCoLBzUqPvF0sCXDEAwPhscuWrPLLKAIdgoMQUkEKBSQQSKw6VUOlVDv7Rjck1ZLJkrCJjhLpUSUs2tUmopFez5uMxC8krfWzsybZkofhdae5zYFlSJ05SVpC3TMXnWMoUVLrvOUkpVvKcgi5j2DxU2UvNKWygwzABwy0rFFOPWQk90Toj4X2Foj4QThpU5MqZiUEBBmBCjSq2z25Z0/wA3It3a+y8WpcqVNYKmJzoGZLZWLqJBYMEqvYO0BJxShL7JxkzZspSlwohIJSojMKJS7FqCCV7TmqWhZmEqQCEEhNAXcMzEFyGIIvxiqHSu63LNm4DEyhOQlmkF5oOU5SXFLuDkNqeMd2kicZcqZMCMkzMZbZQSxyl8tQH4iBl7QmHtXW/al5jpScxqxqndIzKYpZnpEZmNmKlolqW8tBJSlgGJ1JAdRbi7WEKldhpV3W4P1DR0R54rUXsPD6xRRbSPZhFSUnj56xYhbWgoCQUeHnpHc54j3/WJBUdz8/dDokN7YagcOPPSK5q0m6ffy8Y4kcj3HUR5auIDX1qL08NTxg2AHWfZY8jf6RTme57mb84LCTd/PfEZ0oG5r5NxbSFQAoAiRjhkkWIPnWIrSfzgKOFMRMdMeaADwMSBh3srCyly9+RNWpD51y1JAq6g5WpiQhCqAC1tYmvCy0qlvg8RvoYpKFHNMdKh2YCgxyJmXchwrKWqgEOfg56eWjoc8vjGmOCkkAjCYslRYDIoMKMc3q87v3Qp2xJQhSUolTZVKiaGKjZw5NHBtAACpCWBLkEsCbHpoTeLUrANn4Ej5H5xqdgTMZOTNmKx3ZpEla0pmzQpByrCXXKUFpTKfMDugUDQfsjZsszVzV4eUZsqWlZRKUlUiYmYCZc6UFOEtkUlUshi6VJy1gsVGLE+ZQiYsfxK9zH4QRL2vMVuTwMQgaTS6kv+rm/4ks9Dl4pNocbR9EsQucpQEoAjOoSwtkITkSpT9lLlrVvBTSzvEnKAGEUr9B8WCB90VKK8qAZmY5FFBLmWEVUkAb1cyTYvDsKFWPwKUpTMlKK5K6JUobyVJqqXNAoJgBSXAZSSFDUAD7Pwp8D3H5Rpdn7BnqTiZI7NScgmApmIKVTEpTMllBUoEAy5qt9mZZ6hDNlqlqKFjeSWId69Ulj1BgGUKkq4OOXzBjiJZJ4dbt0v4tBGdvdHlqfy/wAfjABKXhU67x5/T6vE1SxqYpE0gMD3Gr111j32k6j5/n4QySwSE8fGOdi2oMVqnOPppERNOkAF6U8Yl2Y8k/6op7Zr6+PdHPtI4K/lTAUXN4PTz3GIPetYHkrPHy8EC3dCAkUJ5Hz0rEFLyipA6t8+6Ap00ggPc/KLMrP8dfG8FgTVPewfnYe/6RHOt3zMeV/HWPGOQgOgd/nnHXjgiWkAEkYuYlKkJUUoX6yR+LdKa/wqUOhPGCTtzEkpPbrdCipJeyikpJHMpUQ/MwDHDAAzm7fxSi5nKs1GT+HL+ECrUe94DxeMmTSDMWVkBg+g5DT+3ARQI5pAA12TtuZhxMSEy5iJiFIKJqcyWVlchiFB8ocAh6O7BpD0jnAASUypCQrMUyJYSFKyqS6ysqKyEqUAFKIDuA9YUJDgRYYAGU30lxqkpScQoBLMEhALhaZgJKUgqVnQguXNL1LtNn+mc9MucqZOzTRKySSZaKqVMT2ilnJvqCAWzuO++Z0ioXgCwz9KTM0xalkrmhSZilMc4WGU5I1r8orkzW0DNpFEVWLwAMROpY8vOsQUoEefhb4RQLRZNTXvPxMMCakE8LcvlHUSiTQFxoHv8o6PV7/pA0rGTEqOVak9CR8ILAnOlkNQnu+fGKQD05e+/SDRtCdT72ZS2+ql7VpeOI2jOFO1mfzq5DjwDQWAKJvBu75mPdryEXL2hNVmQqatST+EqJGmhMDQgP/Z" alt=""></div>
                                <div class="heading1">
                                <br>
                                <div class="nomefil">
                                    <h4>She Hulk</h4>
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