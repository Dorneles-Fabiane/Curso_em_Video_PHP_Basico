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

        soma(5, 6);
        soma(7, 12);
        soma(2, 9);

        function soma($a, $b) {
            $soma = $a + $b;
            echo "<p>$a + $b = <span class='foco'>$soma</span></p>";
        }
    ?>
</div>
</body>
</html>
 