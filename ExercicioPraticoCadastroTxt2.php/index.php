<form method="post" action="receiver.php"></form>
Novo Nome:<br>
<input type="text" name="nome">
<input type="submit" value="Adicionar">
</form>

<h1>Lista de Nomes</h1>

<?php
$text = file_get_contents('text.txt');

echo $text;