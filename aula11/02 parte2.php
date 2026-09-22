S<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $nrl = "v".$i;
            $$v = isset($_GET[$nrl]) ? $_GET[$nrl] : 0;
            $i++;
        }

        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            echo "Valor $i: " . $$v . "<br>";
            $i++;
        }
    ?>
</div>
</body>
</html>
 