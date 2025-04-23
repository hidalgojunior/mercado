<?php
    if (isset($POST['cadastrar'])){
        $nome_mercado = $_POST['nome'];
        $endereco_mercado = $_POST['endereco'];
        $cidade_mercado = $_POST['cidade'];
        $uf_mercado = $_POST['uf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "Dados Informados<br/>";
        echo "Nome do Mercado: ".$nome_mercado;
        

    }

?>