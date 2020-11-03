<?php
    
    #Criando conexão com banco de dados
    $conexao = mysqli_connect('localhost','root','','crud');
     
    #Recebendo dados vindo da (Insere_form.php) - Formulario
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    #criando comando SQL de inserção de dados no banco
    $comandoSQL = "INSERT INTO produtos (nome, categoria, preco) VALUES ('$nome', '$categoria', '$preco')";

    #Verifica se vai executar o SQL normalmente

    if(mysqli_query($conexao, $comandoSQL)) #Mysqli_query = Executa o comando SQL && retorna um booleano!
    {
        #Deu tudo certo? Redireciona para pagina inicial!
        header("Location: http://localhost/PDV/");
    }else{
        echo "Erro ao inserir dados no banco de dados!";
    }
?>