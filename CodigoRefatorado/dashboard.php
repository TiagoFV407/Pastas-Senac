<?php
session_start(); 
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3>Bem-vindo <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h3>
    <p>Esta é uma página restrita, acessível apenas para usuários logados.</p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>