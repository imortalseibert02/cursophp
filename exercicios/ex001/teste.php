<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados do servidor</title>
    <style>
body{
    background-color: gray;
    font-family: Arial, Helvetica, sans-serif;
}
main{
    background-color: white;
  max-width: 600px;
  height: 300px;
  text-align: center;
    border: solid 5px black;
    margin: auto;
   border-radius: 5px;
   box-shadow: 1px 2px 5px black;
    position: relative;
    
}
section{
    
  text-align: center;
    padding: 25px;
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

    </style>
</head>
<body>
    <main>
        <h1>Processamento dos dados</h1>
        <?php
        
        $usuario = $_GET["usuario"];
        $email = $_GET["email"];
        $senha = $_GET["senha"];
        
        echo "<p>Olá $usuario, seu email é $email e tem a senha $senha, correto?";
        ?>
    </main>

</body>
</html>