<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado - Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Supermercado XYZ - Contato</h1>
        <nav>
            <a href="index.php">Página Principal</a>
            <a href="empresa.php">A Empresa</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
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
    <footer>
        <p>&copy; 2025 Supermercado XYZ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>