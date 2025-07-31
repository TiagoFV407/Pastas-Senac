document.getElementById("texto").innerHTML="Meu primeiro texto em Java";

document.write("Minha seguda saida de dados" + "<br>");

alert("Minha terceira saida de dados")

console.log("Minha qurta saida de dados")

document.write("TEXTO" + "<br>");

document.write('TEXTO' + "<br>");

document.write(1+2+3+4 + "<br>");

var pessoa = "Tiago";

var PESSOA = "Fernandes";

var Pessoa = "Vieira" + "<br>";

document.write(pessoa + "<br>");

var primeiro_nome
var segundoNome
var nomeCompleto = pessoa +" "+ PESSOA +" "+ Pessoa

document.write(nomeCompleto);

var pote="bombom" + "<br>"
// Variável pote está recebendo o valor bombom
// sempre que eu
document.write(pote);

//COMENTÁRIO E // OU 
/* COMENTÁRIO */

//DECLARAÇÃO DE VARIÁVEIS

var a,b,c;

//ATRIBUIÇÃO DE VALORES
a=5;
b=6;
c=a+b;
document.write(c + "<br>");
//--------------------

//DECLARAÇÃO DE VARIÁVEIS COM ATRIBUIÇÃO DE VALORES
var a=5;
var b=6;
var c=a+b;
document.write(c + "<br>")

//DECLARAÇÃO DE VARIÁVEIS
var nome, sobrenome, NomeCompleto

//ATTRIBUIÇÃO DE VALORES
nome = "Tiago"
sobrenome = "Fernandes"
NomeCompleto = nome + " " + sobrenome

document.write(NomeCompleto + "<br>");

//--------------------------------------
var nome ="Tiago"
var sobreNome = "Fernandes"
var Nomecompleto = nome + " " + sobreNome

document.write(Nomecompleto + "<br>")

//TIPOS DE VARIÁVEIS (VAR, LET, CONST)

//VAR
var valor1 = 10;
var valor1 = 50;
document.write(valor1 + "<br>")

//LET
let valor2 = 10;
    {
       let valor2 = 50;
       document.write(valor2 + "<br>")
    
    }
document.write(valor2 + "<br>");

//CONST
const valor3 = 5;
{
    const valor3 = 10;
}
document.write(valor3 + "<br>" + "<br>")

//OPERAÇÕES ARITIMÉTICAS (MATEMÁTICA) (+ - * / =)
var x,y,z,soma,sub,div,mult;

x = 10;
y = 15;
z = 20;

document.write(soma = x+y+z + "<br>");
document.write(sub = x-y-z + "<br>");
document.write(div = x/y/z + "<br>");
document.write(mult = x*y*z + "<br>" + "<br>");

//OPERADORES DE ATRIBUIÇÃO(atribuir um valor a variavel)
var teste = 100;

//OPERADORES DE SEQUÊNCIA (++ --)
var sequencia = 10;

document.write(++sequencia + "<br>");
document.write(--sequencia + "<br>");

//OPERADORES DE COMPARAÇÃO(==) (===)
var miguel = 9;
var luiz = 10;

document.write(miguel == luiz + "<br>");
document.write(miguel === luiz + "<br>");//consegue compartilhar strings e golpes
document.write(miguel != + luiz + "<br>")
document.write(eleitor)

//OPERADOR CONDICIONAL (TERNARIO)
var idade, eleitor

idade=16;
eleitor = (idade<=15) ? "Não é eleitor" : "Sim, ele é eleitor"

alert(eleitor);

//OPERADORES LÓGICOS (&& || !)
var idade,eleitor

idade=18;
resultado=(idade >= 16 && idade <=65);
alert("Se for verdadeiro é obrigado a votar se for falso não é obrigado ("+resultado + "<br>")

//OPERADORES LÓGICOS || (OU)
var idade,resultado;
idade=70;
resultado = (idade === 60 || idade === 80);
alert(resultado + "<br>");

//OPERADORES LÓGICOS ! (NEGAÇÃO)
var idade,resultado;
idade=70;
resultado= ! (idade === 60);
alert(resultado);


//FUNÇÕES

