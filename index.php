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
$animes[2] = "Tonikaku Kawaii dublado";
echo "<br>";
print_r($animes); 
// ou array_push ($animes, "oi"); vai inserir no final



//remover 
unset($animes[2]);
echo "<br>";
print_r($animes);


//ordenar 
sort($animes);
print_r($animes);

//exibir tds os itens do array
echo "<br>"; 
foreach($animes as $animes){
    echo $animes . "<br>";
}



?>
</body>
</html>