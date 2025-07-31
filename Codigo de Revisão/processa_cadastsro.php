<?php

echo "<h3>Processando Cadastro...</h3>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
     $senhaPura = $_POST['senha'];

   if (empty($nome) || empty($email) || empty($senhaPura)) {
        echo "<p style='color: red;'>Erro: Todos os campos são obrigatórios!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Erro: E-mail inválido!</p>";
    } else {
        // 3. Hashing da Senha (MUITO IMPORTANTE para segurança!)
        $senhaHash = password_hash($senhaPura, PASSWORD_DEFAULT);

        echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
        echo "<p>E-mail: " . htmlspecialchars($email) . "</p>";
        echo "<p>Senha (hash): " . htmlspecialchars($senhaHash) . " (Nunca armazene a senha pura!)</p>";
        echo "<p style='color: green;'>Dados recebidos e processados com sucesso!</p>";   
    }
} else {
    echo "<p style='color: red;'>Acesso inválido. Use o formulário para enviar os dados.</p>";
}

?>
