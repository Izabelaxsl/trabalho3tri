<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$foto = $_POST['foto'];

$senha_nova = password_hash($senha, PASSWORD_DEFAULT);

$nome_arquivo = $_FILES['foto']['name'];
$caminho_temporario = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

$novo_nome = uniqid() . "." . $extensao;

$caminho_destino = "imagem_usuario/" . $novo_nome;

move_uploaded_file($caminho_temporario, $caminho_destino);

$sql = "INSERT INTO usuario (nome, apelido, email, senha, foto) VALUES ('$nome', '$apelido', '$email', '$senha_nova', '$novo_nome')";

mysqli_query($conexao, $sql);

header("Location: index.php");
?>