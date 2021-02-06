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
        $nome = "Fabiane";
        $novoNome = str_pad($nome, 30, "#", STR_PAD_BOTH);
        print("Me chamo $novoNome Dorneles");
    ?>
</div>
</body>
</html>
 