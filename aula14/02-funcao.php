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
        function soma($a, $b) {
            return $a + $b;
        }
        echo "<p>5 + 8 = <span class='foco'>".soma(5, 8)."</span></p>";
        echo "<p>4 + 3 = <span class='foco'>".soma(4, 3)."</span></p>";
    ?>
</div>
</body>
</html>
 