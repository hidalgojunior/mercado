<?php
include_once 'header.php';
?>

    <main>
        <h2>Sobre o <?=$nome?></h2>
        <p>O <?=$nome?> é líder no mercado há mais de 20 anos, oferecendo produtos de qualidade e o melhor atendimento para nossos clientes.</p>

        <form action="cad_mercado.php" method="POST" class="formulario">
            <label for="nome">Nome do Mercado</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o nome do mercado"/><br/>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Informe o endereço completo (tipo, nome, bairro e cep)." /><br/>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">
            <label for="uf">UF</label>
            <select name="uf" id="uf">
            <option value="AC">Acre</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="SP">São Paulo</option>
            <option value="TO">Tocantins</option>
            </select>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>


    </main>
 <?php
 include_once 'footer.php';
 ?>