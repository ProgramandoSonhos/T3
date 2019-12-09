<!DOCTYPE html>
<html>
<body>

<h1>Curso PHP</h1>

<?php

$nome = "Paulo";
$idade = 33; 

if($idade >= 18){
	echo "$nome é maior que 18 e tem $idade anos.";
}else{ 
	echo $nome.' não é maior que 18 e tem '. $idade.' anos.';
}
?>

</body>
</html>
