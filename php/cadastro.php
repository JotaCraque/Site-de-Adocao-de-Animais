<?php
if(isset($_POST['submit'])) {
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $datanasc = $_POST['datanasc'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, senha, datanasc, estado) VALUES ('$nome', '$email', '$telefone', '$senha', '$datanasc', '$estado')");
    
    if ($result) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
}
?>