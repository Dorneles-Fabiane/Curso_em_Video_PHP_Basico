<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Tabuada For PHP</title>
</head>
<body>
<div>
    <?php
        $valor = isset($_GET["num"])?$_GET["num"]:1;

        print "<h3>Tabuada do número: <span class='foco'>$valor</span><br/></h3>";

        for ($cont = 1; $cont <= 10; $cont++) {
            $resp = $valor * $cont;
            print "$valor x $cont = <span class='foco'>$resp</span><br/>";
        }
    ?>
    <br/><a href="02-index.php" class="botao">Voltar</a>
</div>
</body>
</html>
 