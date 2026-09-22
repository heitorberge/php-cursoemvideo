<!doctype html>
<html lang="pt-bre">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de Php</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php
    $atual = $_GET["aa"];
    echo "O ano atual é $atual e o ano anterior é " .--$atual;
?>
</div>
</body>
</html>

