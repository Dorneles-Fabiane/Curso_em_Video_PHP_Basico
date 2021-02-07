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
                0 => 5,
                2 => 4,
                5 => 10,
                9 => -3
            );
            unset($vetor[0]);
            print_r($vetor);
        ?>
    </pre>
</div>
</body>
</html>
 