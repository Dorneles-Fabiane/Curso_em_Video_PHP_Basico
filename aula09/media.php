<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span {
            color: #a90005;
            font-weight: bold;
            font-size: 18pt;
        }
    </style>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $media = ($nota1 + $nota2)/2;
        $situacao = "";

        if ($media < 5) {
            $situacao = "REPROVADO";
        } else if ($media < 7) {
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "APROVADO";
        }

        echo "A média entre <span>$nota1</span> e <span>$nota2</span> é igual a <span>$media</span>";
        echo "<br/>Situação do aluno: <span>$situacao</span>";
    ?>
    <a href="media.html"><br/>Voltar</a>
</div>
</body>
</html>
 