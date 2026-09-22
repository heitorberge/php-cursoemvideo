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
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($n1 + $n2) / 2;
        if ($media < 7) {
            $status = "Reprovado";
        } else {
            $status = "Aprovado";
        }
        echo "Sua média foi $media.";
        echo "<br>Sua situação é $status.";
    ?>
    <br><a href="desafio.html">Voltar</a>
</div>
</body>
</html>
 