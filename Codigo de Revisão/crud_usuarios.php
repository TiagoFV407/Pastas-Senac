<?php
require_once 'conexao.php'; 

echo "<h3>Exemplo de Operações CRUD com PDO</h3>";


try {
    $nomeNovo = "Ana Silva";
    $emailNovo = "ana.silva@example.com";
    $senhaPuraNovo = "senha123";
    $senhaHashNovo = password_hash($senhaPuraNovo, PASSWORD_DEFAULT);

    $sqlInsert = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sqlInsert);
    $stmt->execute([
        'nome' => $nomeNovo,
        'email' => $emailNovo,
        'senha' => $senhaHashNovo
    ]);
    echo "<p style='color: green;'>Usuário '" . htmlspecialchars($nomeNovo) . "' inserido com sucesso! ID: " . $pdo->lastInsertId() . "</p>";

} catch (PDOException $e) {
    if ($e->getCode() == 23000) { // Código para erro de duplicidade (UNIQUE constraint)
        echo "<p style='color: red;'>Erro ao inserir: E-mail '" . htmlspecialchars($emailNovo) . "' já cadastrado.</p>";
    } else {
        echo "<p style='color: red;'>Erro ao inserir usuário: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}


echo "<h4>Lista de Usuários:</h4>";
try {
    $sqlSelect = "SELECT id, nome, email, data_cadastro FROM usuarios ORDER BY id DESC";
    $stmt = $pdo->query($sqlSelect); 

    if ($stmt->rowCount() > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Data de Cadastro</th></tr>";
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_cadastro']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum usuário cadastrado.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>Erro ao listar usuários: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// --- U: UPDATE (Atualizar um usuário) ---
try {
    $idAtualizar = 1; // ID do usuário a ser atualizado (mude para um ID existente no seu BD)
    $novoNome = "Ana Paula Silva";
    $novoEmail = "ana.paula.silva@example.com";

    $sqlUpdate = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->execute([
        'nome' => $novoNome,
        'email' => $novoEmail,
        'id' => $idAtualizar
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>Usuário com ID " . $idAtualizar . " atualizado para '" . htmlspecialchars($novoNome) . "'.</p>";
    } else {
        echo "<p style='color: orange;'>Nenhum usuário com ID " . $idAtualizar . " foi encontrado ou dados já estão atualizados.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>Erro ao atualizar usuário: " . htmlspecialchars($e->getMessage()) . "</p>";
}


try {
    $idDeletar = 2; 

    $sqlDelete = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($sqlDelete);
    $stmt->execute(['id' => $idDeletar]);

    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>Usuário com ID " . $idDeletar . " deletado com sucesso!</p>";
    } else {
        echo "<p style='color: orange;'>Nenhum usuário com ID " . $idDeletar . " encontrado para deletar.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>Erro ao deletar usuário: " . htmlspecialchars($e->getMessage()) . "</p>";
}

?>
