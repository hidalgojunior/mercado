<?php
include_once 'header.php';

$sql = "select * from mercado";

$consulta = mysqli_query($con, $sql);

if (!$consulta){
    echo "Erro ao executar a consulta";
}
?>
    <main>

        
        <h2>Promoções da Semana</h2>
        <p>Confira as melhores ofertas que preparamos para você!</p>
    </main>
    <?php
   include_once 'footer.php';
   ?>