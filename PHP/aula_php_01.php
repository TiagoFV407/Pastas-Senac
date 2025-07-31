<?php

// Comentário de uma única linha

#  Comentário de uma única linha

/*
comentário 
de 
várias 
linhas
*/

$nome = "Natanael Alves";
$idade = 40;
$voltagem1 = 127.3;
$voltagem2 = 127.3;
$comparacoes = $voltagem1 == $voltagem2;
$mai = "Quando queremos escrever um texto tudo em maiusculo no PHP usamos: strtopper";
$mim = "QUANDO escrever um texto tudo em minusculo no PHP usamos: strtolower";

echo "<b> O nome do usuário </b>: $nome" . "Idade atual: " .$idade ." <i> Anos </i> <hr> <br>";
ECHO "Segundo informações obtidas, a voltagem elétrica 127V e 220V tem suas parcularidades <br>";
print ("Conhecida popurlarmente como 110V, mais que na realidade é: $voltagem1 Volts "." Pode chegar no máximo a: 130V<br>");
if($comparacoes == $voltagem1){
    echo "A voltagem apontada é: $voltagem1 ";
}else{
    echo " Voltagens deferentes...";
}

echo "existe 2 formas de atribuir valores as variaveis, modo comum - Variavel simples, modo composto, Vetor ou Matri, também conhecido como ARRAY: <br>";
$vetor [1] = "Brasil";
$vetor [2] = "Argentina";
$vetor [3] = "Chile";
$vetor ["Teste em execução"] = 1;


$vetor = array(1 => "Brasil",2 => "Argentina", 3 => "Chile", "Teste em execução");



$vetorPaises = array("Brasil", "Argentina", "Chile", "Teste de execução");
echo $vetorPaises[3];

echo "<br> <br>";

echo strtoupper ($mai);

echo "<br> <br>";

echo strtolower ($mim);


?>