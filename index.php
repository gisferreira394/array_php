<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//criar array
$animes = array("Fruits basket" , "Tonikaku Kawaii", "Horimiya");
//adicionar um elemento
$animes[] = "naruto";
//escrever apenas o q eu indicar
echo "Meu anime favorito é <br>"  . $animes[1];
//escrevar tds
echo print_r($animes);
//alterar
$animes[1] = "Tonikaku Kawaii dublado";

?>
</body>
</html>