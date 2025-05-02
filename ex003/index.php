<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos</title>
</head>
<body>
    <?php 
    $f="felipe";
    var_dump($f);
    echo " <br>Olá, $f";
    echo ' <br>Olá, $f ';

    echo " <br> estamos no ano de ".date('Y'); 
echo"<br>";

$curso="PHP";
$ano= date('Y');
echo <<< ESTUDO
Estou estudando 
$curso em $ano

ESTUDO;



    ?>
</body>
</html>