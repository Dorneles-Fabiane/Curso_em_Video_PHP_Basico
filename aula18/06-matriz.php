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
        $matriz = array(
            array(3, 4),
            array(8, 2),
            array(1, 7),
            array(8, 8)
        );
        $matriz[0][1] = $matriz[2][0];
        print_r($matriz);
      ?>
    </pre>
</div>
</body>
</html>
 