<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Regiões do Brasil</title>
</head>
<body>
<div>
    <?php
    $estado = isset($_GET["estados"])?$_GET["estados"]:"empty";

        switch ($estado) {
            case 'am':
            case 'rr':
            case 'ap':
            case 'pa':
            case 'to':
            case 'ro':
            case 'ac':
                $regiao = "Norte";
                break;
            case 'ma':
            case 'pi':
            case 'ce':
            case 'rn':
            case 'pe':
            case 'pb':
            case 'se':
            case 'al':
            case 'ba':
                $regiao = "Nordeste";
                break;
            case 'mt':
            case 'ms':
            case 'go':
                $regiao = "Centro-Oeste";
                break;
            case 'sp':
            case 'rj':
            case 'es':
            case 'mg':
                $regiao = "Sudeste";
                break;
            case 'pr':
            case 'rs':
            case 'sc':
                $regiao = "Sul";
                break;
            default:
                $regiao = "[Não informado]";
        }
        echo "O estado seleciado fica na região <span class='foco'> $regiao</span>";
    ?>
    <a href="javascript:history.go(-1)";><br/><br/>Voltar</a>
</div>
</body>
</html>
 