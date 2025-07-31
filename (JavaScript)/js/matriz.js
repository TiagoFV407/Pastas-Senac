// Primeira forma
// const lista = ["arroz", "feijão", "macarrão", "leite"];
// alert (lista[0]);

// Segunda forma de fazer
// const lista = [
    // "arroz",
    // "feijão",
    // "macarrão",
    // "leite"];

    // alert (lista[0]);




const lista = ["arroz", "feijão", "macarrão", "leite"];
let x = lista[3];
alert(x);

// const lista = ["arroz","feijão", "macarrão", "leite"];
// lista [0] = "café";
// alert(lista[0]);
// console.log(lista);

// Matriz
let pessoa = ["Rodrigo", "Bertucci", "29"];
pessoa[0];
//Objeto
let pessoas = {nome:"Rodrigo", sobrenome:"Bertucci", idade:"29"}
pessoas.nome;
// Manipulação
pessoa.length; //Quantos itens tem dentro da matriz
pessoa[0]; //Saber o primeiro valor da matriz. 
pessoa[pessoa.length -1]; //Saber qual o ultimo valor da matriz
pessoa.push("Professor"); //Acrescentar o valor ao final da matriz
pessoa[4] = "Brasileiro"; //acrescentar o valor na posição escolhida
Array.isArray(pessoa); //Saber se a variavel é um Array (true/false)
pessoa.pop();
pessoa.shift();
pessoa.unshift("Rodrigo");
pessoa.splice(1,1)
let dadosCompleto = pessoa.concat(endereco);
document.getElementById("dados").innerHTML = dadosCompleto.join(" - ");
document.getElementById("teste").innerHTML = pessoa.join(" - ");

let jogadores = ["Biro Biro", "Ribamar", "Pelé", "Maradona", "Neymar", "Messi", "Yuri Alberto","Rony"];
let craques = jogadores.slice(2,6);
document.getElementById("teste").innerHTML = craques;
jogadores.sort(2,6);
document.getElementById("teste").innerHTML = jogadores;

// =================== IF e Else =========== \\

var hora = new Date().getHours();

if(hora < 12){
    alert('Bom dia ');
}else if (hora<18){
    alert('Boa tarde');
}else{
    alert('Boa noite');
}

function verificar() {
    let nome = document.getElementById("nome").value;
    
    if (nome == "" || nome == null) {
        let p = document.getElementById("teste");
        p.innerHTML = "O campo não pode ser vazio";
        p.style.color = "red";
    } else {
        let p = document.getElementById("teste");
        p.innerHTML = "Parabéns tudo certinho";
        p.style.color = "green";
    }
} 


function verificarCor(){
    var cor = document.getElementById("cor").value;

    switch (cor){
        case "azul":
            //o que acontece
            document.body.style.backgroundColor = "blue";
            break;
        case "vermelho":
            // o que acontece
            document.body.style.backgroundColor = "red";
            break;
        case "amarelo":
            // o que acontece
            document.body.style.backgroundColor = "yellow";
            break;
        default:
            //o que acontece
            document.getElementById("teste").innerHTML = "Nenhuma cor disponivel" + cor;
    }
}



//=============== For

for (let i=0; i < 10001; i++){
    document.getElementById("testeNumeros").innerHTML += i + ",";
}

const carros = ["Gol", "Fusca", "Brasília", "Del Rey", "Chevette"];
var tamanho = carros.length;

for (let i = 0; i < tamanho; i++) {
    document.getElementById("Carros").innerHTML += carros[i] + " - ";
}