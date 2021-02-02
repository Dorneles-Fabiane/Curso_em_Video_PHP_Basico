<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Referenciação em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a; //& fará uma referenciação de A a B
            $b += 5;

            echo "A variável a vale $a";
            echo "</br>A variável b vale $b";
        ?>
    </div>
</body>
</html>
