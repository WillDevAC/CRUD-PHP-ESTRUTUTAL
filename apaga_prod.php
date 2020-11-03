<?php
    
    #Criando conexão com banco de dados
    $conexao = mysqli_connect('localhost','root','','crud');
     
    #Recebendo dados vindo da (index.php) - estão vindo via GET
    $id = $_GET['id'];

    #criando comando SQL de exclusão de dados no banco
    #deleta da tabela produtos onde id = o id que to recebendo via GET e tá armazenado na variavel $ID
    $comandoSQL = "DELETE FROM produtos WHERE id = '$id'";;

    #Verifica se vai executar o SQL normalmente
    if(mysqli_query($conexao, $comandoSQL)) #Mysqli_query = Executa o comando SQL && retorna um booleano!
    {
        #Deu tudo certo? Redireciona para pagina inicial!
        header("Location: http://localhost/PDV/");
    }else{
        echo "Erro ao deletar dados no banco de dados!";
    }
?>