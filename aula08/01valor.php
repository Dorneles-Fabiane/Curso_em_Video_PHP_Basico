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
        $valor = $_GET["v"];
        echo "Valor enviado: $valor";

        $raizq = sqrt($valor);

        echo "</br>A raiz quadrada de $valor é ".number_format($raizq, 2);
    ?>
    <a href="01exercicio.html"></br></br>Voltar</a>
</div>
</body>
</html>
 