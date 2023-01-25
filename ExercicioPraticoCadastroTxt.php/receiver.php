<?php
$nome = filter_input(INPUT_POST, 'nome');

if($nome) {
$text = file_get_contents('text.txt');
$nome = $text."\n<li>$nome</li>\n";
file_put_contents('text.txt', $nome);
header("Location: index.php");
} else {
header("Location: index.php");
exit;
}
