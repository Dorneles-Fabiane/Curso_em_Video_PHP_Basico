<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Tabuada</title>
</head>
<body>
<div>
    <?php
        $valor = isset($_GET["v"])?$_GET["v"]:1;
        $cont = 1;

        echo "<h3>Tabuada de $valor:</h3>";
        do {
            $resp = $valor * $cont;
            echo "<h5><span class='foco'>$valor X $cont = $resp</span><br/></h5>";
            $cont++;
        } while ($cont <= 10);
    ?>
    <a href="03-index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 