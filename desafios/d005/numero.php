<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisando dados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php
        $num = $_POST["n"];
        echo "<p>Analisando o numero " . number_format($num, 3, ",", ".") . " informado pelo usuario";

        $int = (int)$num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do numero é " . number_format($int, 0, ",", ".");

        echo "<li> A parte fracionaria do numero é " . number_format($fra, 3, ",", ".");

        ?>
    </main>
    <button onclick="javascript:history.go(-1)">
        Voltar
    </button>
</body>

</html>