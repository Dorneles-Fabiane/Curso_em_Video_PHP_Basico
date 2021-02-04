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
        $a = 4;

        function teste(&$x) {
            $x += 7;
            echo "<p>O valor de X é $x</p>";
        }
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div>
</body>
</html>
 