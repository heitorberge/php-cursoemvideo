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
        $v = array(3=>"A",1=>"E",6=>"C",9=>"D",5=>"B");
        print_r($v);
        ksort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 