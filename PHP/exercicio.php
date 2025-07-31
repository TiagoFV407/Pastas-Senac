<?php

$idade = 5;




echo "Analise de obrigatoriedade de votação<br>";

if ($idade <= 16){
    echo "Idade analisada! Não sou obridado a votar, mas posso votar de maneira opcional";
} elseif ($idade >= 18){
    echo "Idade analisada! Sou obrigado a votar";
}else($idade >= 65){
    echo "Idade analisada! Meu voto é opcional";
}


?>