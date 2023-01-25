<form method="POST" action="receiver.php">
Novo Nome:</br>
<input type="text" name="nome"></input>
<input type="submit" value="Adicionar"></input>
</form>

<h1>Lista de Nomes</h1>
<?php
$text = file_get_contents('text.txt');

echo $text;


