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
        $i = 1;
        while($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
        }

        $cont = 1;
        while($cont <=5) {
            $v = "num".$cont;
            echo "Valor $cont : ".$$v."<br/>";
            $cont++;
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 