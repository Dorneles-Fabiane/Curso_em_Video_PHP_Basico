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
        $nome = $_GET["nome"];
        $anonascimento = $_GET["an"];
        $idade = date("Y") - $anonascimento;

        $tipo = ($idade>=18 and $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

        echo "$nome nasceu em $anonascimento e tem $idade anos";
        echo "</br>Voto $tipo";

    ?>
</div>
</body>
</html>
 