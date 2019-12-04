<!DOCTYPE html>
<html>
<body>

<?php
define('TITULO','Curso de PHP - Exemplo');

// A linha abaixo vai dar erro pq constante  não pode receber valor;
//TITULO = 'outro texto'; 
// A constante é feita pra ser definida somente uma vez então comando vai dar erro pq ela já foi definida
//define('TITULO','outro texto de teste');

echo TITULO;

?>  

</body>
</html>
