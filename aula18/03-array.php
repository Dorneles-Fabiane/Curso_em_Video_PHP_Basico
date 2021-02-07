<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <table border="1"><tr>
      <?php
        echo "<th>Vetor: </th>";
        $c = range(5, 30, 2);
        foreach($c as $valor) {
          echo "<td>$valor </td>";
        }
      ?>
      </tr></table>
  </pre>
</div>
</body>
</html>
 