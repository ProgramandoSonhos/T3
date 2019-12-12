<?php

$dados = array(
	array('João','Atendente',1000),
	array('Ana','Supervisor de TM',2000),
	array('Maria','Caixa',1500),
);

?>
<!DOCTYPE html>
<html>
<body>

<h2>Tabela PHP</h2>

<table style="width:100%;" border="1">
  <tr>
    <th>Nome</th>
    <th>Cargo</th> 
    <th>Salário</th>
  </tr>
  <?php
	foreach($dados as $linha){
  ?>
	  <tr>
	  <?php
		foreach($linha as $valor){
	  ?>
		
		<td><?php echo $valor; ?></td>
	  <?php
		}
	  ?>

	  </tr>
  <?php
	}
  ?>
  
  <tr>
    <td>Ana</td>
    <td>Supervisor de TM</td>
    <td>2000.00</td>
  </tr>
  <tr>
    <td>Maria</td>
    <td>Caixa</td>
    <td>1500.00</td>
  </tr>
</table>

</body>
</html>
