<?php
require 'calculadora.php';

$calc = new Calculadora();
$calc->add(1452);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);


echo "TOTAL: " . $calc->showTotal();
?>

<form action="limpa.php" method="post"><button type="submit">Limpar</button></form>






