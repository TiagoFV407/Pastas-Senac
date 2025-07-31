function calcular (){
    const input = document.getElementById('valor_input').value;
    try {
        const resultado = eval(input);

    if (isNaN(resultado)) {
            document.write("Resultado inválido");
        }
        document.getElementById('resultado_final').innerHTML = 'Resultado: ' + resultado;

    }catch (error) {
        document.getElementById('resultado_final').innerHTML = "Erro Digite uma expressão matemática Valida";
    }
} 

function adicionar(valor) {
    document.getElementById('visor').value += valor;
}