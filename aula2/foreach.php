<!DOCTYPE html>
<html>
<body>

<?php

$cidades = array("Belo Horizonte", "São Paulo", "Rio de Janeiro");

foreach($cidades as $cidade){
	echo $cidade.'<br />';
	
}

$cidades5 = array("Belo Horizonte"=>31, "São Paulo"=>11, "Rio de Janeiro"=>21);

foreach($cidades5 as $cidade){
	echo $cidade.'<br />';
	
}

$cidades5 = array("Belo Horizonte"=>31, "São Paulo"=>11, "Rio de Janeiro"=>21);

foreach($cidades5 as $cidade => $codigo){
	echo $cidade.' - '.$codigo.'<br />';
	
}



?>  

</body>
</html>
