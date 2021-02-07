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
        $vetor = array("F","a","b","i","a","n","e");

        print_r($vetor);

        array_push($vetor, "D");
        //$vetor[] = "D";
        print_r($vetor);

        array_pop($vetor);
        print_r($vetor);
    ?>
    </pre>
</div>
</body>
</html>
 