<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $n = array(array(6,4),array(4,9),array(3,2));
        $n[0][1] = $n[2][1];
        print_r($n);
    ?>
    </pre>
</div>
</body>
</html>
 