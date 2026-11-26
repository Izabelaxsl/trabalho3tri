<?php
    //require_once "verificar_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_tutor.php">
        Nome: <br>
        <input type="text" name="nome"> <br><br>

        CPF: <br>
        <input type="text" name="cpf"><br><br>

        Telefone: <br>
        <input type="text" name="telefone"><br><br>

        Email: <br>
        <input type="text" name="email"><br><br>

        Endereço: <br>
        <input type="text" name="endereco"><br><br>

        Foto: <br>
        <input type="file" name="foto"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>