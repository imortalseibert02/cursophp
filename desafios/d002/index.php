<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php ex001</title>
    <link rel="stylesheet" href="../d001/style.css">

</head>

<body>
    <main>
        <h1>resultado final</h1>
        <p>
            
             <?php
             
            
            $num = mt_rand(0,100);
            echo"numero entre 0 e 100";
            echo "<br>numero foi $num";
        
            ?>
            
                <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
            
                
                <button onclick="javascript:document.location.reload()">
         &#x1f504; Gerar outro numero 
        </button>

        </p>
    </main>





</body>

</html>