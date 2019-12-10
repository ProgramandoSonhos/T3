<?php

function mostraCidade($valor)
{
	switch ($valor) {
		case 31:
			echo "Belo Horizonte";
			break;
		case 11:
			echo "São Paulo";
			break;
		default:
			echo "Cidade não identificada";
	}
}


?>
<!DOCTYPE html>
<html>
<body>

<?php

$ddd = 11;
mostraCidade($ddd);

?>  

</body>
</html>
