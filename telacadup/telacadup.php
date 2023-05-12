<!DOCTYPE html>
<html lang="pt-br">
    <title>TechMovies Cadastro</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="TECHMOVIES LOGO.png" type="image/icon">
    <link rel="stylesheet" href="telacad.css">

</head>


<body>

<div class="container">

<form id="cad-usuario-form"  method ="POST" action="cadastrar.php"> 
    
        <div class="row">

            <div class="col">

                <h3 class="title">Complete os dados</h3>

                <div class="inputBox">
                    <span>endereço:</span>
                    <input type="text" name="endereco_usuario" id="endereco_usuario" placeholder="Rua -- Bairro -- Número">
                </div>
                <div class="inputBox">
                    <span>Cidade:</span>
                    <input type="text" name="cidade_usuario" id="cidade_usuario" placeholder="Nome da sua Cidade">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>País:</span>
                        <input type="text" name="pais_usuario" id="pais_usuario" placeholder="Brasil">     
                    </div>
                
    

                  
                    
                    <div class="inputBoxp">
    
                        <span>Plano Selecionado:</span><br><br>
                        
                        <select name="plano_usuario"  id="plano_usuario" required="required">
                        <option value ="0" selected = "Selecionar"> Selecionar</option>
                        <option value= "1" >Plano Basico R$9,99</option>
                        <option value= "2" >Plano Intermediário R$17,99</option>
                        <option value= "3" >Plano Premium R$24,99</option>
    
                    </select>
                    </div>
                  
               





                </div>
                <a class="BotaoVoltar" href="../telaplanosup/telaplanosup.html" ><img src="back.png" alt=""></a>
            </div>

            

            <div class="col">

                <h3 class="title">pagamento</h3>          

                
                <div class="areacartao">
                <div class="inputBox">
                    <span>número do cartão :</span>
                    <input type="number" name="numcart" class="numcart" placeholder="1111-2222-3333-4444">
                </div>
                
                <div class="flex">

                </form>
                
            <div class="inputBox" id="cartao">
            
                    <span>Mês Cartão:</span>

                    <select class="opmes" name="opmes"  id="opmes" required="required">

                        <option value="0" selected = "Selecionar"> Selecionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>


    
                    </select>

            </div>
            </div>
                   
                
                        <div class="inputBox">
                    
                            <span>Ano vencimento:</span>
                            <input type="number" name="anovenc" class="anovenc" placeholder="2022">
                        </div>

                        
                

                
                    <div class="inputBox">
                        
                        <span>CVV:</span>
                        <input type="number" class="cvv" name="cvv" placeholder="123">
                    </div>  
                </div>

                <br><br><br><br><br>

                

                <input type="submit" class="submit-btn" value="Cadastrar"><br><br>
 
                   
            </div>
    
        </div>
       

        
    </form>
   

</div> 

<script src="js/sweetalert2.js"></script>

<!-- Incluir JavaScript no HTML -->
<script src="js/custom.js"></script>
</body>
</html>