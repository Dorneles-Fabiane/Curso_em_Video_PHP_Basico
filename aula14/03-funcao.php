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
        $soma = soma(5, 3, 9, 10, 8);
        echo "A soma é <span class='foco'>$soma</span>!";

        function soma() {
            $par = func_get_args();
            $tot = func_num_args();
            $soma = 0;

            for($index = 0; $index < $tot; $index++) {
                $soma += $par[$index];
            }
            return $soma;
        }
    ?>
</div>
</body>
</html>
 