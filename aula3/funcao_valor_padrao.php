<?php

function mostraTitulo($valor='Curso PHP')
{
	echo '<h1>'.$valor.'</h1>';
}


?>
<!DOCTYPE html>
<html>
<body>

<?php

$texto = 'Funções em PHP';
mostraTitulo();
mostraTitulo('Aula 3');
mostraTitulo($texto);

?>  

</body>
</html>
