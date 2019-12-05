<!DOCTYPE html>
<html>
<body>

<?php

$cidades = array("Belo Horizonte", "São Paulo", "Rio de Janeiro");

var_dump($cidades);


$cidades2[0] = "Belo Horizonte";
$cidades2[1] = "São Paulo";
$cidades2[2] = "Rio de Janeiro";

var_dump($cidades2);

$cidades3[] = "Belo Horizonte";
$cidades3[] = "São Paulo";
$cidades3[] = "Rio de Janeiro";

var_dump($cidades3);

$codigos = array(31, 11, 21);

var_dump($codigos);

$cidades4["Belo Horizonte"] = 31;
$cidades4["São Paulo"] = 11;
$cidades4["Rio de Janeiro"] = 21;

echo '<br />';
var_dump($cidades4);

$cidades5 = array("Belo Horizonte"=>31, "São Paulo"=>11, "Rio de Janeiro"=>21);

echo '<br />';
var_dump($cidades5);

?>  

</body>
</html>
