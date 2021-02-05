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
        $str = "   Teste teste teste   ";

        $resTrim = trim($str);
        $resLTrim = ltrim($str);
        $resRTrim = rtrim($str);

        echo strlen($resTrim)."<br/>";
        echo strlen($str)."<br/>";
        echo strlen($str);
    ?>
</div>
</body>
</html>
 