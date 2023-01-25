<?php
//vamos ler com php arquivo de texto externo

//$texto = file_get_contents('texto.txt');
//echo $texto."<br/>";

//posso manipular o texto
$texto = file_get_contents('texto.txt');
$texto = explode("\n", $texto);
echo "LINHAS: ".count($texto)."<br/>";