<?php
require_once 'conexao.php'; // Inclui a conexão com o banco de dados
session_start(); // Inicia a sessão

// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header("Location: dashboard.php");
    exit();
}

$mensagem = ""; // Para mensagens de erro de login

// Exibe mensagem de sucesso do cadastro (se veio de processa_cadastro.php)
if (isset($_SESSION['message']) && $_SESSION['message_type'] == 'success') {
    $mensagem = "<p style='color: green;'>" . htmlspecialchars($_SESSION['message']) . "</p>";
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senhaPura = $_POST['senha'];

    if (empty($email) || empty($senhaPura)) {
        $mensagem = "<p style='color: red;'>E-mail e senha são obrigatórios.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "<p style='color: red;'>E-mail inválido.</p>";
    } else {
        try {
            // Consulta o banco de dados para buscar o usuário pelo e-mail
            $sqlSelect = "SELECT id, nome, senha FROM usuarios WHERE email = :email";
            $stmt = $pdo->prepare($sqlSelect);
            $stmt->execute(['email' => $email]);
            $usuario = $stmt->fetch();

            // Verifica se o usuário foi encontrado e se a senha está correta
            if ($usuario && password_verify($senhaPura, $usuario['senha'])) {
                // Login bem-sucedido
                $_SESSION['logado'] = true;
                $_SESSION['usuario_id'] = $usuario['id']; // Armazena o ID do usuário
                $_SESSION['usuario'] = $usuario['nome']; // Armazena o nome do usuário

                header("Location: dashboard.php"); // Redireciona para a página restrita
                exit();
            } else {
                $mensagem = "<p style='color: red;'>E-mail ou senha incorretos.</p>";
            }
        } catch (PDOException $e) {
            $mensagem = "<p style='color: red;'>Ocorreu um erro ao tentar fazer login. Por favor, tente novamente mais tarde.</p>";
            // error_log("Erro no login: " . $e->getMessage()); // Para depuração
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* CSS (Mantido igual ao seu) */
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .login-container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        .login-container h2 { margin-bottom: 20px; color: #333; }
        .form-group { margin-bottom: 15px; text-align: left; }
        .form-group label { display: block; margin-bottom: 5px; color: #555; font-weight: bold; }
        .form-group input[type="text"], .form-group input[type="password"] { width: calc(100% - 20px); padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .form-group input[type="submit"] { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; transition: background-color 0.3s ease; }
        .form-group input[type="submit"]:hover { background-color: #0056b3; }
        .error-message { color: red; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Entrar</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
            <?php
                // Exibe a mensagem de erro (ou sucesso de cadastro)
                if (!empty($mensagem)) {
                    echo $mensagem;
                }
            ?>
        </form>
        <p>Não tem conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
    </div>
</body>
</html>