<?php
    $pesquisa = $_POST['pesquisa'];

    #Verifica se o valor digitado é igual a alguma pagina PHP
    if($pesquisa == "Lista de produtos" || $pesquisa == "Lista De Produtos" || $pesquisa == "lista de produtos" || $pesquisa == "lista de Produtos")
    {
        header("Location: http://localhost/PDV/");
    }elseif ($pesquisa == "Novo Produto" || $pesquisa == "novo produto" || $pesquisa == "Novo produto" || $pesquisa == "novo Produto")
    {
        header("Location: http://localhost/PDV/insere_form.php");
    }else if($pesquisa == "Esquema" || $pesquisa == "esquema")
    {
        header("Location: http://localhost/PDV/esquema.php");
    }else{
        header("Location: http://localhost/PDV/");
    }
?>