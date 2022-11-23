<form action="final.php" method="post">

    <input type="hidden" name="nome" value="<?php echo $_POST["nome"]; ?>">
    <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"]; ?>">

    <label>Email</label>
    <input type="text" name="email" id="email">

    <br>
    <label>Senha</label>
    <input type="password" name="senha" id="senha">
    <button type="submit">Finalizar</button>
</form>