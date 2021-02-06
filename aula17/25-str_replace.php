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
        $frase = "Gosto de estudar Matemática, Matemática é muito legal!";
        //$novaFrase = str_replace("Matemática", "PHP", $frase); // Leva em consideração o Case (upper e lower)
        $novaFrase = str_ireplace("matemática", "PHP", $frase); // 'i' de ignore, ignora o Case

        echo $novaFrase;
    ?>
</div>
</body>
</html>
 