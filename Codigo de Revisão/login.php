<?php
session_start(); // Inicia a sessão

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = $_POST['senha'];

    // Simulação de verificação de usuário e senha (EM UM PROJETO REAL, ISSO VIRIA DO BANCO DE DADOS!)
    $usuarioValido = "admin";
    $senhaCorretaHash = password_hash("12345", PASSWORD_DEFAULT); // Senha para teste é "12345"

    if ($usuario === $usuarioValido && password_verify($senha, $senhaCorretaHash)) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: dashboard.php"); // Redireciona para a página restrita
        exit();
    } else {
        $mensagem = "<p style='color: red;'>Usuário ou senha inválidos!</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Página de Login</h3>
    <?php echo $mensagem; ?>
    <form action="login.php" method="POST">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
