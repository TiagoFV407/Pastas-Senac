<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        .bg-info{
            font-size: 20px;
            }

          .bg-light{
           height: 100vh;
           }
    </style>

</head>
<body>
    
    <div class="p-1 mb-0 bg-info txt-black"><img src="php.png" width="80">Programação Servidor Local</img></div>
    <div class="p-3 b-2 bg-light text-dark">
            
    <center>
            <form methods="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="number" name="numero1" placeholder="Digite o Primeiro Nº "> <br>
                    <br>
                    <input type="number" name="numero2" placeholder="Digite o Segundo Nº "> <br><br>
                    <br>
                <input type="submit">
            </form>
    </center>

                echo "<br> <br>";
              echo "<center>  </center>";
         }
?>       


       
    
</body>
</html>