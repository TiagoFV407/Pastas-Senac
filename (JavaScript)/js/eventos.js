function eventoOnClick(){
    alert("Adicionou o evento de 1 click");
    document.body.style.background = "red";
}

function eventoOndblclick(){
    alert("Adicionou o Evento de click duplo");
    document.body.style.background = "yellow";
}

function viraVerde(){
    let mudarCor = document.getElementById("mouseEmCima");
    mudarCor.style.backgroundColor = "green";
}

function viraAzul(){
    let mudarCor = document.getElementById("mouseEmCima");
    mudarCor.style.backgroundColor = "blue";
}

function adicionaTexto(){
    let p= document.getElementById("mouseMove");
    p.append("Adicionar o texto ao mover o mouse na area");
}

function limpaTexto(){
    document.getElementById("campoTexto").value = "";
}

function mudou(){
    console.log ("O valor do select mudou")
}

function mudarCor(){
    document.body.style.backgroundColor = "blue";
}

function teclaPressionada(){
    let valorDaTecla = document.getElementById("teclaAcionada").value
    console.log(valorDaTecla);
}

function teclaPressionada(){
    let valorDaTecla1 = document.getElementById("teclaAcionada").value
    console.log(valorDaTecla1);
}

function teclaPressionada(){
    let valorDaTecla2 = document.getElementById("teclaAcionada").value
    console.log(valorDaTecla2);
}
