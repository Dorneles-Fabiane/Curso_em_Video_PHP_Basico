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
        $produto = "Leite";
        $preco = 4.5;

        //echo "<p>O $produto custa R$ ".number_format($preco, 2)."</p>";
        printf ("O %s custa R$ %.2f", $produto, $preco);
    ?>
</div>
</body>
</html>
 