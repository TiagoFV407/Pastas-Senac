<?php 
$servername = "localhost";
$username = "root";
$password ="";

//Criando uma Conexão com o banco de dados 
$conn = new mysqli($servername, $username, $password);

//Checagem de conexão 

if($conn->connect_error){
    die("A Conexão falhou motivo:".$conn->connect_error);

}
echo "Conexão com banco de dandos efetuado com sucesso";
?>