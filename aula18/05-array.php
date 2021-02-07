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
      <?php
         $cadastro = array(
                 "nome" => "Diuliam",
                 "idade" => 30,
                 "peso" => 75.0);
         //print_r($cadastro);
        foreach ($cadastro as $key => $valor) {
            echo "<p>O campo ".ucfirst($key)." possui o conteudo $valor</p>";
        }
      ?>
    </pre>
</div>
</body>
</html>
 