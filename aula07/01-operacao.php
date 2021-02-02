<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Operações em PHP</title>
</head>
<body>
<div>
    <?php
        $valor1 = $_GET["a"];
        $valor2 = $_GET["b"];
        $tipo = $_GET["op"];
        $resposta = ($tipo=="s")?$valor1+$valor2:$valor1*$valor2;

        echo "Os valores passados foram $valor1 e $valor2";
        echo "</br>O resultado será $resposta";
    ?>
</div>
</body>
</html>
 