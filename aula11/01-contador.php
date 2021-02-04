<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Contador</title>
</head>
<body>
<div>
    <?php
        $voltas = 1;
        while ($voltas <= 10) {
            echo "<span class='foco'> ".$voltas++." <span/>";
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 