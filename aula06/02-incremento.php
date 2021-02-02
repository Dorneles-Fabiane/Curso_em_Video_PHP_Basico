<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Incremento PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $anoat = $_GET["aa"]; #Pega o ano da URL

            echo "Estamos em $anoat";
            echo "</br>Ano passado foi ".--$anoat;
        ?>
    </div>
</body>
</html>
