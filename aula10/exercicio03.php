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
       $e = isset($_GET["est"])?$_GET["est"]:0;
       switch ($e){
           case 1:
               $r = "Norte";
               break;
           case 2:
               $r = "Nordeste";
               break;
           case 3:
               $r = "Centro-Oeste";
               break;
           case 4:
               $r = "Sudeste";
               break;
           case 5:
               $r = "Sul";
               break;
           default:
               $r = "Indefinido";
       }
       echo "Você mora no <span class='foco'>$r</span>"
    ?>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 