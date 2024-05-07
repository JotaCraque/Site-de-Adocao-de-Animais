<?php
session_start();

// Incluindo arquivo de conexão com o banco de dados
include_once('conexao.php');

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['nova_senha'])) {
    // Obter o e-mail e a nova senha do formulário
    $email = $_POST['email'];
    $novaSenha = $_POST['nova_senha'];

    // Verificar se o e-mail existe no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);

    if ($result && $result->num_rows > 0) {
        // Atualizar senha no banco de dados
        $sql = "UPDATE usuarios SET senha = '$novaSenha' WHERE email = '$email'";
        $result = $conexao->query($sql);

        if ($result) {
            // Mensagem de sucesso
            echo "Senha alterada com sucesso! Você será redirecionado para a página de login em 5 segundos.";
            
            // Redirecionamento usando cabeçalhos HTTP
            header("refresh:5; url=http://localhost/projetotcc/login.html");
            exit(); // Certifique-se de sair após o redirecionamento
        } else {
            echo "Erro ao atualizar senha: " . $conexao->error;
        }
    } else {
        echo "E-mail não encontrado. Verifique se o endereço de e-mail está correto.";
    }
} else {
    echo "Erro: Não foi possível processar sua solicitação.";
}
?>
