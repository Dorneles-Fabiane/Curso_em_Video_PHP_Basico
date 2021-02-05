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
        $vetor[0] = 1;
        $vetor[1] = 6;
        $vetor[2] = 9;
        $vetor[3] = 2;

        print_r($vetor);
        echo "<br/>";

        $vetor2 = array (5, 9, 8, 3, 2);
        var_export($vetor2);
        echo "<br/>";

        var_dump($vetor);

    ?>
</div>
</body>
</html>
 