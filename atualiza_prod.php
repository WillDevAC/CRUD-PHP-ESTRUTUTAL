<?php
    
    #Criando conexão com banco de dados
    $conexao = mysqli_connect('localhost','root','','crud');
     
    #Recebendo dados vindo da (atualiza_form.php) - estão vindo via POST
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    #atualizo os dados pelos dados vindo do formulario do select anterior
    $comandoSQL = "UPDATE produtos SET nome ='$nome', categoria = '$categoria', preco = '$preco' WHERE id = $id";;

    #Verifica se vai executar o SQL normalmente
    if(mysqli_query($conexao, $comandoSQL)) #Mysqli_query = Executa o comando SQL && retorna um booleano!
    {
        #Deu tudo certo? Redireciona para pagina inicial!
        header("Location: http://localhost/PDV/");
    }else{
        echo "Erro ao atualizar dados no banco de dados!";
    }
?>