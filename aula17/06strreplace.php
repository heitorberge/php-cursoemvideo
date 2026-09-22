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
        $f = "Gosto de estudar Matematica";
        echo $f;
        $nf = str_replace("Gosto", "Não gosto", $f);
        echo "<br>". $nf;
    ?>
</div>
</body>
</html>
 