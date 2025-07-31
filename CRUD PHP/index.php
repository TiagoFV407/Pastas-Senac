<?php

include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">   
    <title>CRUD + PHP + POO</title>
    <style>
        .menu,
        thead{
            background-color: #bbb !important;
        }
        .row{
            padding: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar narbar-light bg-light menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                CRUD + PHP  + POO 
            </a>
        </div>
    </nav>

    <div class="container">
        <form action="app/controller/UsuarioController.php" method="POST">
            <div class="row">
                <div class="col-md-5">
                    <label>Nome</label>
                    <input type="text" name="nome" value="" autofocus class="form-control" require/>
                </div>
                <div class="col-md-5">
                    <label>Sobrenome</label>
                    <input type="text" name="sobrenome" value="" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label>Idade</label>
                    <input type="number" name="idade" value="" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="col-md-2">
                   <br>
                   <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>IAções</th>
                    </tr>                        
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario): ?>
                        <tr>
                            <td><?= $usuario->getID() ?></td>
                            <td><?= $usuario->getNome() ?></td>
                            <td><?= $usuario->getSobrenome() ?></td>
                            <td><?= $usuario->getIdade() ?></td>
                            <td><?= $usuario->getSexo() ?></td>
                            <td class="text-center">
                                <button class="btn-warning btn-sm" data-toggle= </button>

            </table>

        </div>
    </div>
</body>
</html>
