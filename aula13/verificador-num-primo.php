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
        $divisores = 0;
        $multiplos = "";

        echo "<h2>Analisando o número <span class='foco'>$valor...</span><br/></h2>";

        for ($c = $valor; $c >=1; $c--) {
            if (($valor % $c) == 0) {
                $divisores++;
                $multiplos .= " $c ";
            }
        }

        if ($divisores == 2) {
            $resp = "<span class='foco'>É PRIMO!</span>";
        } else {
            $resp = "<span class='foco'>NÃO É PRIMO!</span>";
        }

        echo "<h3>Valores múltiplos: $multiplos<br/></h3>";
        echo "<h3>Total de múltiplos: <span class='foco'> $divisores </span><br/></h3>";
        echo "<h3><strong>Resposta:</strong> $valor $resp<br/></h3>";
    ?>
    <a href="03-index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 