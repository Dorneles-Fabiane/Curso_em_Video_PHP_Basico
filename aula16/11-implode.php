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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";

        //echo implode(" ", $vetor);
        //echo join("#", $vetor); --> join(): Funciona da mesma forma que o implode
        echo implode("#", $vetor);
    ?>
</div>
</body>
</html>
 