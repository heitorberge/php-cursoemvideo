
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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos.";
        if($i >= 18 & $i < 65){
            $v = "tem que votar";
            $d = "já pode dirigir";
        }
        elseif ($i >= 16 & $i < 18) {
            $v = "vota opcionalmente";
            $d = "não dirige";
        }
        elseif ($i >= 65) {
            $v = "vota opcionalmente";
            $d = "já pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não dirige";
        }
        echo "<br>Com essa idade você $v e também $d.<br>"
    ?>
    <a href="execicio01.html">Voltar</a>
</div>
</body>
</html>
 