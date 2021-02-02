<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variaveis Variaveis</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";

            echo "O conteúdo da variável x é $x";
            echo "</br>A variável ABC criada recebeu o valor ${$x}";
        ?>
    </div>
</body>
</html>
