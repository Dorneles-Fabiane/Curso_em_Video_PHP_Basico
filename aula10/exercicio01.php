<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        .botao {
            background-color: #273747;
            color: white;
            padding: 7px;
            box-shadow: 2px 2px 1px #aaaaaa;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<div>
    <?php
        $valor = isset($_GET["v"])?$_GET["v"]:0;
        $operacao = isset($_GET["operacao"])?$_GET["operacao"]:1;
        $resposta = 0;

        switch ($operacao) {
            case 1:
                $resposta = $valor * 2; //Dobro
                break;
            case 2:
                $resposta = pow($valor, 3); //Cubo
                break;
            case 3:
                $resposta = sqrt($valor); //Raiz Quadrada
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$resposta</span>";
    ?>
    <a href="exercicio01.html" class="botao">Voltar</a>
</div>
</body>
</html>
 