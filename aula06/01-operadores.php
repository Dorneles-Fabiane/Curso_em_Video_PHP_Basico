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
        $preco = $_GET["valor"];

        echo "<h2>O preço do produto é R$".number_format($preco, "2",
            ",", ".")."</h2>";

        $preco += $preco * 0.1;
        echo "<h2>O novo valor com 10% de aumento será igual a R$".number_format($preco, 2,
            ",", ".")."</h2>";

    //        $preco -= $preco * 0.1;
    //        echo "O novo valor com 10% de desconto será igual a R$".number_format($preco, "2",
    //                ",", ".");
    ?>
</div>


</body>
</html>
