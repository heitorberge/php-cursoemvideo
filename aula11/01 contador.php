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
        ob_implicit_flush(true);
        ob_end_flush();
        $c = 10;
        while ($c >= 1) {
            echo "$c <br/>";
            flush();
            sleep(1);
            $c--;
        }
    ?>
</div>
</body>
</html>
 