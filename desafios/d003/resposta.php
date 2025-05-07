<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <main>
        <h1>Conversor de moedas</h1>
        
        <?php
        /*
        $cotaçao = 5.73;
        $real = $_GET["num"] ?? 0;
        $dolar = ( $real / $cotaçao );
        echo "<p>Seus R$  equivalem a US$ </p>";*/
        
        /*
        $cotaçao = 5.73;
        $real = 1000;
        $dolar = $real / $cotaçao;
        echo "Seus R$" .number_format($real, 2). " equivalem a US$" .number_format($dolar, 2);
        */
        $cotaçao = 5.73;
        $real = $_GET["num"] ?? 0;
        $dolar = ( $real / $cotaçao );
        $padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);
        echo "<p>Seus " .numfmt_format_currency($padrao, $real, "BRL"). " equivalem a  " .numfmt_format_currency($padrao, $dolar, "USD") ;
        ?>
        <p>
        <a href="javascript:history.go(-1)">Voltar a pagina anterior</a>
        </p>
        <button onclick="javascript:history.go(-1)">
             Voltar
        </button>
    </main>
</body>
</html>