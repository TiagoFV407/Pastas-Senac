<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $data = htmlspecialchars($_POST['data']);
        $hora = htmlspecialchars($_POST['hora']);
        $pessoas = htmlspecialchars($_POST['pessoas']);
    

    // Define um cookie para armazenar o nome do último cliente por 30 Minutos
    setcookie('ultimo_cliente', $nome, time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wqewq</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading">Reserva Realizada com Sucesso!</h4>
            <p>Olá, **<?php echo $nome; ?>**!</p>
            <p>Sua reserva para o dia **<?php echo date('d/m/y', strtotime($data))?>** ás **<?php echo $hora; ?>** para **<?php echo $pessoas; ?>** pessoa(s) foi confirmada.</p>
            <hr>
            <p class="mb-0">Aguardamos sua visita!</p>
        </div>
        <div class="text-center">
            <a href="reserva.php" class="btn btn-secondary">Fazer Nova</a>
            <a href="index.php" class="btn btn-info">Voltar ao Início</a>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    } else {
        header("Location: reserva.php");
        exit();
    }
?>