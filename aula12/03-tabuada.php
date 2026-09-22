<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
        $c = 1;
        $t = isset($_GET["tab"])?$_GET["tab"]:1;
        echo "<h1>Tabuada do <span class='foco'>$t</span></h1>";
        do {
            $m = $c * $t;
            echo "$t x $c = <span class='foco'>$m</span> <br>";
            $c++;
        } while ($c <= 10);
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 