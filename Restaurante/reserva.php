<?php
// Define um cookie para pré-preencher o nome do último cliente se existir
$nome_cliente = $_COOKIE['ultimo_cliente'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Faça sua Reserva</h2>
        <form id="formReserva" action="processa_reserva.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($nome_cliente); ?>" required>
                <div class="invalid-feedback">
                    Por favor, insira seu nome.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Por favor, insira um email válido.
                </div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
                <div class="invalid-feedback">
                    Por favor, insira seu telefone.
                </div>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data da Reserva:</label>
                <input type="date" class="form-control" id="data" name="data" required>
                <div class="invalid-feedback">
                    Por favor, selecione uma data.
                </div>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora da Reserva:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
                <div class="invalid-feedback">
                    Por favor, selecione uma hora.
                </div>
            </div>
            <div class="mb-3">
                <label for="pessoas" class="form-label">Número de Pessoas:</label>
                <input type="number" class="form-control" id="pessoas" name="pessoas" min="1" required>
                <div class="invalid-feedback">
                    Por favor, insira o número de pessoas.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Fazer Reserva</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>