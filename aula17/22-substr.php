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
        $site = "Curso em Video";
        //$sub = substr($site, 0,5);
        //$sub = substr($site, 6);
        $sub = substr($site, -5);

        echo "$sub ";
    ?>
</div>
</body>
</html>
 