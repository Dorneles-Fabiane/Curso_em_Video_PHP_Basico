<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = isset($_GET["v"])?$_GET["v"]:1;
        $cont = $valor;
        $fatorial = 1;

        echo "<h3>Calculando fatorial de $valor</h3>";

        do {
            $fatorial = $fatorial * $cont;
            $cont--;
        } while ($cont >= 1);

        echo "<span class='foco'>$valor! = $fatorial</span>";
    ?>
</div>
</body>
</html>
 