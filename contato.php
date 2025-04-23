<?php
include_once 'header.php';
?>

    <main>
        <h2>Fale Conosco</h2>
        <form action="contato.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $email = htmlspecialchars($_POST["email"]);
            $mensagem = htmlspecialchars($_POST["mensagem"]);

            echo "<p>Obrigado, $nome! Sua mensagem foi enviada com sucesso.</p>";
        }
        ?>
    </main>
   <?php
   include_once 'footer.php';
   ?>