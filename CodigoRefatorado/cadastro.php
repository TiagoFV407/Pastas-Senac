<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        .container h2 { margin-bottom: 20px; color: #333; }
        .form-group { margin-bottom: 15px; text-align: left; }
        .form-group label { display: block; margin-bottom: 5px; color: #555; font-weight: bold; }
        .form-group input[type="text"], .form-group input[type="email"], .form-group input[type="password"] { width: calc(100% - 20px); padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .form-group input[type="submit"] { background-color: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; transition: background-color 0.3s ease; }
        .form-group input[type="submit"]:hover { background-color: #218838; }
        .message-success { color: green; margin-top: 10px; }
        .message-error { color: red; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastre-se</h2>
        <?php
        session_start(); // Inicia a sessão para checar mensagens
        // Exibe mensagem de sucesso ou erro do processa_cadastro.php
        if (isset($_SESSION['message'])) {
            $msg_type = (isset($_SESSION['message_type']) && $_SESSION['message_type'] == 'success') ? 'message-success' : 'message-error';
            echo "<p class='{$msg_type}'>" . htmlspecialchars($_SESSION['message']) . "</p>";
            unset($_SESSION['message']); // Limpa a mensagem após exibir
            unset($_SESSION['message_type']); // Limpa o tipo da mensagem
        }
        ?>
        <form action="processa_cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        <p>Já tem conta? <a href="login.php">Faça login aqui</a></p>
    </div>
</body>
</html>