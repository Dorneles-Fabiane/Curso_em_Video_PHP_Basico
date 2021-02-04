<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02-parte2.php">
        <?php
            $cont = 1;
            while ($cont <= 5) {
                echo "Valor $cont: <input type='number' name='v$cont' min='0' max='100' value='0'/><br/>";
                $cont++;
            }
        ?>
        <input type="submit" value='Enviar'/>
    </form>
</div>
</body>
</html>
 