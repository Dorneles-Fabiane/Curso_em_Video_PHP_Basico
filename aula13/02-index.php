<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Tabuada FOR PHP</title>
</head>
<body>
<div>
    <form method="get" action="02-tabuada.php">
        <label for="num">Valor</label>
        <select name="num" id="num">
            <?php
                for ($cont = 1; $cont <=10; $cont++) {
                    echo "<option>$cont</option>";
                }
            ?>
        </select>
        <input type="submit" class="botao" value="Calcular"/>
    </form>
</div>
</body>
</html>
 