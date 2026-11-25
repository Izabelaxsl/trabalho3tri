<?php
    require_once "verificar_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_postagem.php">
        Nome: <br>
        <input type="text" name="nome"> <br><br>

        CPF:
        <input type="text" name="cpf"><br><br>

        Telefone:
        <input type="text" name="telefone"><br><br>

        Email:
        <input type="text" name="email"><br><br>

        Endereço:
        <input type="text" name="endereco"><br><br>

        Foto:
        <input type="text" name="foto"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>