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
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    $divisores = [];
    $d = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $d++;
            $divisores[] = $i;
        }
    }

    $p = true;
    if ($n <= 1) {
        $p = false;
    } else {
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                $p = false;
                break;
            }
        }
    }

    echo "<h1>Analisando o número $n...</h1>";
    echo "Divisores: " . implode(" ", $divisores);
    echo "<br/>Total de Divisores: $d";
    echo "<br/><h2>Resultado: $n " . ($p ? "<span class='foco'>É PRIMO!</span>" : "<span class='foco'>NÃO É PRIMO!</span>") ,"</h2>";
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
