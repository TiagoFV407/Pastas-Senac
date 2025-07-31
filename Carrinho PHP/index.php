<?php
$cookieCarrinho = "carrinho_de_compras";
$produtosNoCarrinho = [];
$feedbackMessage = '';
$alertType = 'info';

if (isset($_COOKIE[$cookieCarrinho])) {
    $produtosNoCarrinho = json_decode($_COOKIE[$cookieCarrinho], true);

    if (!is_array($produtosNoCarrinho)) {
        $produtosNoCarrinho = [];
    }
}

if (isset($_POST['adicionar_produto']) && isset($_POST['produto_id'])) {
    $produtoId = htmlspecialchars($_POST['produto_id']);

    if (!in_array($produtoId, $produtosNoCarrinho)) {
        $produtosNoCarrinho[] = $produtoId;
        $feedbackMessage = "Produto **#{$produtoId}** adicionado ao carrinho!";
        $alertType = 'success';
    } else {
        $feedbackMessage = "Produto **#{$produtoId}** já está no carrinho.";
        $alertType = 'warning';
    }

    setcookie($cookieCarrinho, json_encode($produtosNoCarrinho), time() + 3600, '/');
}

$produtosDisponiveis = [
    ['id' => 'P001', 'nome' => 'Laptop Gamer', 'preco' => 'R$ 5.500,00'],
    ['id' => 'P002', 'nome' => 'Mouse sem Fio', 'preco' => 'R$ 150,00'],
    ['id' => 'P003', 'nome' => 'Teclado Mecânico', 'preco' => 'R$ 300,00'],
    ['id' => 'P004', 'nome' => 'Monitor Ultrawide', 'preco' => 'R$ 1.800,00'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Loja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Produtos disponíveis</h1>

        <?php if (!empty($feedbackMessage)): ?>
            <div class="alert alert-<?php echo $alertType; ?>" role="alert">
                <?php echo $feedbackMessage; ?>
            </div>
        <?php endif; ?>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($produtosDisponiveis as $produto): ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($produto['nome']); ?></h5>
                            <p class="card-text">ID: <?php echo htmlspecialchars($produto['id']); ?></p>
                            <p class="card-text">Preço: <?php echo htmlspecialchars($produto['preco']); ?></p>
                            <form method="POST">
                                <input type="hidden" name="produto_id" value="<?php echo htmlspecialchars($produto['id']); ?>">
                                <button type="submit" name="adicionar_produto" class="btn btn-primary">Adicionar ao carrinho</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-5 text-center">
            <a href="carrinho.php" class="btn btn-lg btn-success">
                Ver carrinho (<?php echo count($produtosNoCarrinho); ?> itens)
            </a>
        </div>

        <p class="mt-4 text-muted"></p>
    </div>
</body>
</html>
s