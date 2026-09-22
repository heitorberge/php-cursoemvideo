<!doctype html>
<html lang="pt-bre">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções Aritméticas</title>
    <style>
        h2 {
            font: 20pt Arial;
            color: #268a66;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2);
        echo "<br> O valor de $v1 <sup>$v2</sup> é " . pow($v1, $v2);
        echo "<br> A raiz quadradada de $v1 é " . sqrt($v1);
        echo "<br> O arredondamento de $v2 é " .round($v2);
        echo "<br> A parte inteira de $v2 é " .intval($v2);
        echo "<br>O valor de $v1 em moeda é R$" .number_format($v1, 2, ",", ".");
    ?>
</div>
</body>
</html>

