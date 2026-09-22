<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP _modelophp.php- CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
        echo "Quem nasceu em $ano tem $idade anos.";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        $tipo = ($idade<=18 && $idade>15)?"OPCIONAL":"";
        echo "<br>Seu voto é $tipo";
    ?>
</div>
</body>
</html>
 