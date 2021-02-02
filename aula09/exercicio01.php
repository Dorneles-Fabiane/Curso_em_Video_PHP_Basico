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
        $nascimento = isset($_GET["an"])?$_GET["an"]:1900;
        $idade = date("Y") - $nascimento;
        $voto = "";
        $dirige = "";

        if ($idade < 16) {
            $voto = "Não Vota!";
            $dirige = "NÃO";
        } elseif ($idade < 18 || $idade > 70) {
            $voto = "Voto Opcional!";
            if ($idade < 18) {
                $dirige = "NÃO";
            } else {
                $dirige = "SIM";
            }
        } else {
            $voto = "Voto Obrigatório!";
            $dirige = "SIM";
        }

        echo "Você tem $idade anos: $voto";
        echo "<br/>Pode dirigir: $dirige";
    ?>
    <a href="exercicio01.html"><br/><br/>Voltar</a>
</div>
</body>
</html>
 