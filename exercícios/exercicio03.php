<!DOCTYPE html>
<html>
<body>

<h1>Curso PHP</h1>

<?php 
$salario = array(1000,4000,5000);
$total=0;
foreach($salario as $valor){
  //$total = $total + $valor; 
  $total += $valor;
}
echo 'O valor total dos salario é: '.$total;
?> 

</body>
</html>
