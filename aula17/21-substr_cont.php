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
        $frase = "<h2>Estou aprendendo PHP no Curso em Vídeo de PHP</h2>";
        $cont = substr_count($frase, "PHP");

        echo $frase;
        echo "<p>A substring <span class='foco'>PHP</span> aparece 
                    <span class='foco'>$cont</span> vezes na frase</p>";
    ?>
</div>
</body>
</html>
 