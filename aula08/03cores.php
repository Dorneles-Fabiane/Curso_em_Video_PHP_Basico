<!DOCTYPE html>
<html>
<head>
    <?php
        $texto = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      span.texto {
          font-size: <?php echo $tamanho; ?>;
          color: <?php echo $cor ?>;
      }
  </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$texto</span>";
    ?>
</div>
</body>
</html>
 