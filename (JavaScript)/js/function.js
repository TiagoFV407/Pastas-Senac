function soma(valor1, valor2){
    valor1= 10;
    valor2 = 20;
    return(valor1 +valor2);
}
document.getiElementById("restaurante").innerHTML = soma();

// Conversao Moedas
var real, dolar, total;
real = 100.00
dolar = 6.05;

function conversao(real, dolar){
    return real / dolar;
}


var total = conversao(real, dolar);

alert(total.toFixed(2))



//Conversão de temperatura
var temperaturaFahrenheit, valorCelsius

temperaturaFahrenheit = 77;

function conversao(valorFahrenheit){
    //conta que ira retornar
    return (5/9) * (valorFahrenheit - 32);// Conta da Conversao
}
valorCelsius = valorFahrenheit(temperaturaFahrenheit);

alert(valorCelsius + "ºC");


//Objetos

const carro = {
    marca: "ford",
    modelo: "ka",
    cor: "branco",
    peso: "900",
    partida: function (){
        alert("nem nem nem")
    },
    acelerar: function (){
        alert("Vruuuummmmmm")
    },
    bracar: function () {
        alert("iiiiiiiiir")
    }
}


console.log(carro);
alert(carro.marca);
alert(carro["modelo"]);
carro.partida();
carro.acelerar();
carro.brecar();


