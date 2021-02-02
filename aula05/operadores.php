<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $media = ($n1 + $n2)/2;
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            echo "<h3>A soma vale ".($n1+$n2)."</h3>";
            echo "<h3>A subtração vale ".($n1-$n2)."</h3>";
            echo "<h3>A multiplicação vale ".($n1*$n2)."</h3>";
            echo "<h3>A divisão vale ".($n1/$n2)."</h3>";
            echo "<h3>O resto vale ".($n1%$n2)."</h3>";
            echo "<h3>A média ente ".$n1." e ".$n2." é igual a ".$media."</h3>";
        ?>
    </div>
</body>
</html>
