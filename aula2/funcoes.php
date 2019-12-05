<?php

function mostraTitulo()
{
	echo "<h1>Funções em php</h1>";
}

mostraTitulo();


function mostraTitulo2($texto)
{
	echo "<h1>".$texto."</h1>";
}

$nomeTitulo = "Exemplo função 1";
mostraTitulo2($nomeTitulo);

echo $nomeTitulo;

function aumentaTexto($texto)
{
	$texto = mb_strtoupper($texto);
	echo "<h1>".$texto."</h1>";
}

aumentaTexto($nomeTitulo);

echo $nomeTitulo;


function aumentaTexto2(&$texto)
{
	$texto = mb_strtoupper($texto);
	echo "<h1>".$texto."</h1>";
}

aumentaTexto2($nomeTitulo);

echo $nomeTitulo;

function mostraTitulo3($texto = "Exemplo")
{
	echo "<h1>$texto</h1>";
}

mostraTitulo3();

echo $nomeTitulo;

function mostraTitulo4($tam,$texto = "Exemplo")
{
	switch($tam){
		case 1:
			echo "<h1>$texto</h1>";
		break;
		case 2:
			echo "<h2>$texto</h2>";
		break;
		case 3:
			echo "<h3>$texto</h3>";
		break;
		case 4:
			echo "<h4>$texto</h4>";
		break;
		case 5:
			echo "<h5>$texto</h5>";
		break;
	}
}

mostraTitulo4("4");

echo $nomeTitulo;

$mostraTituloSemTamanho = function($texto="Anônima"){
	return "<fieldset><legend>$texto</legend><h1>teste</h1></fieldset>";
};

echo $mostraTituloSemTamanho();
echo $mostraTituloSemTamanho("título do fieldset");

?>