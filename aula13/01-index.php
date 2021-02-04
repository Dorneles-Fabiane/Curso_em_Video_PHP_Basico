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
        for($cont = 1; $cont <= 10; $cont++) {
            echo " $cont ";
        }

        echo "<br/>";

        for ($cont = 10; $cont >= 1; $cont--) {
            echo " $cont ";
        }

        echo "<br/>";

        for ($cont = 0; $cont <=50; $cont+=5) {
            echo " $cont ";
        }

        echo "<br/>";

        for ($cont = 20; $cont >=0; $cont-=2){
            print "  $cont ";
        }
    ?>
</div>
</body>
</html>
 