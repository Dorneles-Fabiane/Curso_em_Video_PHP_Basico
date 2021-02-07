<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $vetor = array(
            3 => "f",
            5 => "a",
            2 => "b",
            0 => "i",
            6 => "a",
            1 => "n",
            4 => "e"
        );

        print_r($vetor);

        ksort($vetor);
        print_r($vetor);

        krsort($vetor); //ordem reversa indice
        print_r($vetor);
    ?>
    </pre>
</div>
</body>
</html>
 