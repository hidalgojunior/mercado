<?php

$nome = "Mercado do Totó";
$autor= "<a href='mailto:arnaldo.hidalgo@etec.sp.gov.br'>Arnaldo Martins Hidalgo Junior</a>";

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base ="mercados";

    $con = mysqli_connect($servidor, $usuario, $senha, $base)
    or die("Erro ao conectar a base de dados");

?>