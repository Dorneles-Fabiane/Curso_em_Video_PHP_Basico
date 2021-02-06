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
        $frase = "Estou aprendendo PHP";
        //$pos = strpos($frase,"PHP"); - Leva em consideração o case
        $pos = stripos($frase, "php"); //Não leva em consideração o case

        echo $frase."<br/>"."A string PHP foi encontrado na posição $pos";
    ?>
</div>
</body>
</html>
 