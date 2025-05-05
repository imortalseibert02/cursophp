<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php ex001</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h1>resultado final</h1>
        <p>
            <?php
            $n = $_REQUEST["num"] ?? 0;
            $ant = $n -1;
            $suc = $n +1;

            echo "o antecessor de $n é $ant<p>"; 
            echo "o sucessor de $n é $suc";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
        </p>
    </main>





</body>

</html>