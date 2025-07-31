<?php
// Define o nome do cookie para o carrinho de compras
$cookieCarrinho = "carrinho_de_compras";
$produtosNoCarrinho = [];
$feedbackMessage = '';
$alertType = 'info';

// Verifica se o cookie do carrinho existe e o carrega
if (isset($_COOKIE[$cookieCarrinho])) {
    $produtosNoCarrinho = json_decode($_COOKIE[$cookieCarrinho], true);
    if (!is_array($produtosNoCarrinho)) {
        $produtosNoCarrinho = [];
    }
}

// Processa a remoção de produtos do carrinho
if (isset($_POST['remover_produto']) && isset($_POST['produto_id'])) {
    $produtoIdRemover = htmlspecialchars($_POST['produto_id']);

    // Remove o produto do array
    $key = array_search($produtoIdRemover, $produtosNoCarrinho);
    if ($key !== false) {
        unset($produtosNoCarrinho[$key]);
        // Reindexa o array para evitar buracos (opcional, mas boa prática)
        $produtosNoCarrinho = array_values($produtosNoCarrinho);

        // Atualiza o cookie com a nova lista (agora sem o produto removido)
        setcookie($cookieCarrinho, json_encode($produtosNoCarrinho), time() + 3600, '/');
        $feedbackMessage = "Produto **#{$produtoIdRemover}** removido do carrinho.";
        $alertType = 'danger';
    } else {
        $feedbackMessage = "Produto **#{$produtoIdRemover}** não encontrado no carrinho.";
        $alertType = 'warning';
    }
} elseif (isset($_POST['limpar_carrinho'])) {
    // Remove o cookie do carrinho definindo seu tempo de expiração no passado
    setcookie($cookieCarrinho, "", time() - 3600, '/');
    $produtosNoCarrinho = []; // Limpa o array em memória também
    $feedbackMessage = "Seu carrinho foi limpo com sucesso!";
    $alertType = 'danger';
}

// Lista de produtos fictícios (para buscar os detalhes dos IDs no carrinho)
$produtosDisponiveis = [
    'P001' => ['nome' => 'Laptop Gamer', 'preco' => 'R$ 5.500,00'],
    'P002' => ['nome' => 'Mouse Sem Fio', 'preco' => 'R$ 150,00'],
    'P003' => ['nome' => 'Teclado Mecânico', 'preco' => 'R$ 300,00'],
    'P004' => ['nome' => 'Monitor Ultrawide', 'preco' => 'R$ 1.800,00'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Seu Carrinho de Compras</h1>

        <?php if (!empty($feedbackMessage)): ?>
            <div class="alert alert-<?php echo $alertType; ?>" role="alert">
                <?php echo $feedbackMessage; ?>
            </div>
        <?php endif; ?>

        <?php if (empty($produtosNoCarrinho)): ?>
            <div class="alert alert-warning" role="alert">
                Seu carrinho está vazio. <a href="index.php" class="alert-link">Continue comprando!</a>
            </div>
        <?php else: ?>
            <ul class="list-group mb-4">
                <?php
                $totalPreco = 0;
                foreach ($produtosNoCarrinho as $produtoId):
                    if (isset($produtosDisponiveis[$produtoId])):
                        $produtoDetalhes = $produtosDisponiveis[$produtoId];
                        // Convertendo preço para numérico para somar (removendo R$ e ,)
                        $precoNumerico = str_replace(['R$', ' ', ','], ['', '', '.'], $produtoDetalhes['preco']);
                        $totalPreco += floatval($precoNumerico);
                ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                **<?php echo htmlspecialchars($produtoDetalhes['nome']); ?>** (ID: <?php echo htmlspecialchars($produtoId); ?>)
                                <br>
                                Preço: <?php echo htmlspecialchars($produtoDetalhes['preco']); ?>
                            </div>
                            <form method="POST" class="ms-auto">
                                <input type="hidden" name="produto_id" value="<?php echo htmlspecialchars($produtoId); ?>">
                                <button type="submit" name="remover_produto" class="btn btn-sm btn-outline-danger">Remover</button>
                            </form>
                        </li>
                <?php
                    else:
                ?>
                        <li class="list-group-item text-muted">
                            Produto com ID **<?php echo htmlspecialchars($produtoId); ?>** não encontrado (provavelmente foi removido da loja).
                            <form method="POST" class="d-inline ms-2">
                                <input type="hidden" name="produto_id" value="<?php echo htmlspecialchars($produtoId); ?>">
                                <button type="submit" name="remover_produto" class="btn btn-sm btn-outline-warning">Remover (Inválido)</button>
                            </form>
                        </li>
                <?php
                    endif;
                endforeach;
                ?>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
                    <strong>Total:</strong>
                    <strong>R$ <?php echo number_format($totalPreco, 2, ',', '.'); ?></strong>
                </li>
            </ul>

            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Continuar Comprando</a>
                <form method="POST">
                    <button type="submit" name="limpar_carrinho" class="btn btn-warning">Limpar Carrinho</button>
                </form>
                <button class="btn btn-primary">Finalizar Compra (Simulação)</button>
            </div>
        <?php endif; ?>

        <p class="mt-4 text-muted">
            Este carrinho de compras usa cookies para armazenar os IDs dos produtos.
            Para um sistema de e-commerce real, é altamente recomendado usar **sessões de servidor** ou um **banco de dados** para armazenar informações do carrinho, especialmente se houver necessidade de persistência em longos períodos, controle de estoque ou funcionalidades avançadas.
        </p>
    </div>
</body>
</html>