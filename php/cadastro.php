<?php
if(isset($_POST['submit'])) {
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $datanasc = $_POST['datanasc'];
    $estado = $_POST['estado'];
    $genero = $_POST['genero'];
    

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, cpf, cep, telefone, senha, datanasc, estado, genero) VALUES ('$nome', '$email', '$cpf', '$cep', '$telefone', '$senha', '$datanasc', '$estado', '$genero')");

    if ($result) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
}
?>