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
        $i = isset($_GET["in"])?$_GET["in"]:0;
        $f = isset($_GET["fi"])?$_GET["fi"]:1;
        $in = isset($_GET["inc"])?$_GET["inc"]:1;
        if ($in <= 0) {
            $in = 1;
        }
        if ($i > $f) {
            while ($i >= $f) {
                echo "<span class='foco'>$i </span>";
                $i -= $in;
            }
        } else {
            while ($i <= $f) {
                echo "<span class='foco'>$i </span>";
                $i += $in;
            }
        }
    ?>
    <br><a href="03exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>
 