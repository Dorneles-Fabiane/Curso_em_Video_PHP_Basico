<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Contador Personalizavel</title>
</head>
<body>
<div>
    <?php
        $inicio = isset($_GET["in"])?$_GET["in"]:1;
        $fim = isset($_GET["fim"])?$_GET["fim"]:1;
        $passo = isset($_GET["p"])?$_GET["p"]:1;

        if ($inicio > $fim) {
            for ($cont = $inicio; $cont >= $fim; $cont-=$passo) {
                echo " <span class='foco'>$cont</span> ";
            }
        } else {
            for ($cont = $inicio; $cont <= $fim; $cont+=$passo){
                echo " <span class='foco'>$cont</span> ";
            }
        }
    ?>
    <br/><br/><a href="contador-personalizavel.html" class="botao">Voltar</a>
</div>
</body>
</html>
 