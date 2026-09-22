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
        $f = "Eu vou estudar PHP";
        $c = str_word_count($f,2);
        print_r($c);
    ?>
</div>
</body>
</html>
 