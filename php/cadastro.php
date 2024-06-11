<?php
// Incluir o arquivo de conexão com o banco de dados
include_once("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit1'])) {
        if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['cep'], $_POST['telefone'], $_POST['senha'], $_POST['datanasc'], $_POST['estado'], $_POST['genero'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $cep = $_POST['cep'];
            $telefone = $_POST['telefone'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $datanasc = $_POST['datanasc'];
            $estado = $_POST['estado'];
            $genero = $_POST['genero'];

            // Inserir dados no banco de dados
            $query = "INSERT INTO pessoafisica (cpf, nome, email, cep, telefone, senha, datanasc, estado, genero) 
                      VALUES ('$cpf', '$nome', '$email', '$cep', '$telefone', '$senha', '$datanasc', '$estado', '$genero')";

            if ($conexao->query($query) === TRUE) {
                header('Location: ../login.html');
                exit();
            } else {
                echo "Erro ao inserir registro: " . $conexao->error;
            }
        } else {
            echo "Todos os campos obrigatórios devem ser preenchidos.";
        }
    } elseif (isset($_POST['submit2'])) { 
        if (isset($_POST['nome'], $_POST['email'], $_POST['cnpj'], $_POST['cep'], $_POST['telefone'], $_POST['senha'], $_POST['estado'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cnpj = $_POST['cnpj'];
            $cep = $_POST['cep'];
            $telefone = $_POST['telefone'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
            $estado = $_POST['estado'];

            // Inserir dados no banco de dados
            $query = "INSERT INTO pessoajuridica (cnpj, nome, email, cep, telefone, senha, estado)  
                      VALUES ('$cnpj', '$nome', '$email', '$cep', '$telefone', '$senha', '$estado')";

            if ($conexao->query($query) === TRUE) {
                header('Location: ../login.html');
                exit();
            } else {
                echo "Erro ao inserir registro: " . $conexao->error;
            }
        } else {
            echo "Todos os campos obrigatórios devem ser preenchidos.";
        }
    }
}
?>
