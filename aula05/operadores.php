<!doctype html>
<html lang="pt-bre">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $m = ($n1 + $n2) / 2;
            echo "A soma vale ". ($n1+$n2);
            echo "<br>A subtração vale ". ($n1-$n2);
            echo "<br>A multiplicação vale ". ($n1*$n2);
            echo "<br>A divisão vale ". ($n1/$n2);
            echo "<br>O módulo vale ". ($n1%$n2);
            echo "<br>A media vale $m";
        ?>
    </div>
</body>
</html>

