<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_doacao.php" method="post">

        <select name="animal">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_turma";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $turmas = mysqli_stmt_get_result($comando);

            while ($turma = mysqli_fetch_array($turmas)) {
                $turma_id = $turma['idturma'];
                $turma_nome = $turma['nome'];

                echo "<option value='$turma_id'>$turma_nome</option>";
            }
            ?>
        </select> <br><br>




    </form>
</body>
</html>
