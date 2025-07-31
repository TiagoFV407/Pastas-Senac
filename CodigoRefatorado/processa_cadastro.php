<?php
require_once 'conexao.php'; // Inclui a conexão
session_start(); // Inicia a sessão para mensagens de feedback e redirecionamento

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senhaPura = $_POST['senha'];

    // Validação básica
    if (empty($nome) || empty($email) || empty($senhaPura)) {
        $_SESSION['message'] = "Todos os campos são obrigatórios!";
        $_SESSION['message_type'] = "error";
        header("Location: cadastro.php");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "E-mail inválido!";
        $_SESSION['message_type'] = "error";
        header("Location: cadastro.php");
        exit();
    }

    try {
        // 1. Verificar se o e-mail já existe
        $sqlCheckEmail = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmtCheck = $pdo->prepare($sqlCheckEmail);
        $stmtCheck->execute(['email' => $email]);

        if ($stmtCheck->fetchColumn() > 0) {
            $_SESSION['message'] = "Este e-mail já está cadastrado. Tente outro ou faça login.";
            $_SESSION['message_type'] = "error";
            header("Location: cadastro.php");
            exit();
        }

        // 2. Hashing da Senha
        $senhaHash = password_hash($senhaPura, PASSWORD_DEFAULT);

        // 3. Inserir Usuário no Banco de Dados
        $sqlInsert = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sqlInsert);
        $stmt->execute([
            'nome' => $nome,
            'email' => $email,
            'senha' => $senhaHash
        ]);

        // 4. Cadastro bem-sucedido
        $_SESSION['message'] = "Sua conta foi criada com sucesso! Por favor, faça login.";
        $_SESSION['message_type'] = "success";
        header("Location: login.php"); // Redireciona para a página de login
        exit();

    } catch (PDOException $e) {
        // Mensagem de erro genérica para o usuário, detalhes no log do servidor
        $_SESSION['message'] = "Ocorreu um erro ao tentar cadastrar. Por favor, tente novamente mais tarde.";
        $_SESSION['message_type'] = "error";
        // Opcional: Logar $e->getMessage() para depuração em ambiente de desenvolvimento
        // error_log("Erro no cadastro: " . $e->getMessage()); 
        header("Location: cadastro.php");
        exit();
    }

} else {
    // Se a requisição não for POST, redireciona para a página de cadastro
    header("Location: cadastro.php");
    exit();
}
?>