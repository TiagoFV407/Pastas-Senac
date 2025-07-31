<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=aulasdb",$username,$password);

    //definindo o modo de erro PDO como exceção 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão efetuada com sucesso";
}catch(PDOException $e){
echo "Infelizmente a conexão falhou:".$e->getMessage();
}
?>

 