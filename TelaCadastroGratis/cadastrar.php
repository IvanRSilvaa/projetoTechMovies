<?php

// Incluir a conexão com banco de dados
include_once './conexao.php';

// Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);




// Validar o campo nome_usuario, acessa o IF quando o campo está vazio 
if (empty($dados['nome_usuario'])) {

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo nome!"];
} elseif (empty($dados['email_usuario'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo e-mail!"];
} elseif (empty($dados['senha_usuario'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo senha!"];

}/*elseif (empty($dados['endereco_usuario'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo endereço!"];

}elseif (empty($dados['cidade_usuario'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo cidade!"];

}elseif (empty($dados['pais_usuario'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo país!"];

}elseif ($plano_usuario == "0") { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário selecionar um plano!"];

}elseif (empty($dados['namecart'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o nome do cartão!"];

}
elseif (empty($dados['numcart'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o número do cartão!"];


}elseif ($opmes == "0") { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário selecionar um mês!"];

}elseif (empty($dados['anovenc'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário informar o ano de vencimento do cartão!"];


}elseif (empty($dados['cvv'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 

    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário informar o código de segurança do cartão!"];


}*/







else{ // Acessa o ELSE quando todos os campo estão preenchidos

    // Criar a QUERY para cadastrar usuário no banco de dados
    $query_usuario = "INSERT INTO usuarios (email_usuario, nome_usuario,senha_usuario) VALUES ( :email_usuario, :nome_usuario, :senha_usuario)";

    // Preparar a QUERY
    $cad_usuario = $conn->prepare($query_usuario);

    // Usar o bindParam para substituir o link da QUERY pelo valor que vem do formulário 
   // $cad_usuario->bindParam(':cidade_usuario', $dados['cidade_usuario']);

    // Usar o bindParam para substituir o link da QUERY pelo valor que vem do formulário 
    $cad_usuario->bindParam(':email_usuario', $dados['email_usuario']);

    $cad_usuario->bindParam(':nome_usuario', $dados['nome_usuario']);
    //$cad_usuario->bindParam(':namecart', $dados['namecart']);

    //$cad_usuario->bindParam(':snumcart', $dados['numcart']);

    //$cad_usuario->bindParam(':anovenc', $dados['anovenc']);

    //$cad_usuario->bindParam(':pais_usuario', $dados['pais_usuario']);

    //$cad_usuario->bindParam(':endereco_usuario', $dados['endereco_usuario']);

    $cad_usuario->bindParam(':senha_usuario', $dados['senha_usuario']);

   

    //$cad_usuario->bindParam(':cvv', $dados['cvv']);

 
    // Executar a QUERY com PHP e PDO
    $cad_usuario->execute();

    // Acessa o IF quando cadastrar o registro no banco de dados
    if ($cad_usuario->rowCount()) {

        // Criar o array com status e a mensagem de sucesso
        $retorna = ['status' => true, 'msg' => "Usuário cadastrado com sucesso!"];
    } else { // Acessa o ELSE quando não cadastrar o registro no banco de dados

        // Criar o array com status e a mensagem de erro
        $retorna = ['status' => false, 'msg' => "Erro: Usuário não cadastrado com sucesso!"];
    }
}

// Converter o array em objeto e retornar para o JavaScript
echo json_encode($retorna);
