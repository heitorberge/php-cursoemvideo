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
        $t = "Texto grande, Muito Grande, Imensamente Grande, Não tão grande assim... Mas é grande";
        $r = wordwrap($t, 5, "<br>", false);
        echo $r;
    ?>
</div>
</body>
</html>
 