const carros = ["Gol", "Fusca", "Brasília", "Del Rey", "Chevette"];
var tamanho = carros.length;

for (let i = 0; i < tamanho; i++) {
    document.getElementById("Carros").innerHTML += carros[i] + " - ";
}