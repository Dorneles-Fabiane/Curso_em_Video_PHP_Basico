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
        $str = "Eu vou estudar PHP agora";
        //$cont = str_word_count($str, 0); -> Conta o número de palavras
        $cont = str_word_count($str, 1); //Cria um vetor com as palavras da string
        //$cont = str_word_cont($str, 2) --> Cria um vetor mantendo o posicionamento de cada palavara na string

        print_r($cont);
    ?>
</div>
</body>
</html>
 