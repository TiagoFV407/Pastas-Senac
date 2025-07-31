<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"  />
    <title>Exemplos input com pattern</title>
    </head>
    <body>
<form actions="script_CAD.php">
     <p>Somente letras
        <input type="text" required name="letras"
          pattern="[a-z\s]+$"
                      title="Letras e espaços em brancos"></p>
    <p>Somente números
        <input type="text" required name="numeros"
        pattern="[0-9]+$"
           title="Somente números"></p> 
    <p>Data1
        <input type="date" required maxlengt="10" name="Data1"
        pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
        min="2000-01-01"  max="2025-02-18" </p>
    <p>Data2
        input type="date" required maxlengt="10" name="data2"
        pattern="\d{2}\/d{2}\/\d{4}"
        min="2000-01-01" max="2025-02-18"
        title="formato: dd/mm/aaaa"></p>

    <p>Hora
        <input type="time" required maxlength="8" name="hora"
        pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$"
        title="formato/ hh:mm"></p>
    <p>Telefone
        <input type="tel" required maxlength="15" name="telefone"
        pattern="\([0-9]{2}\) [0-9]"
    </p>

</form>
    
</body>
</html>