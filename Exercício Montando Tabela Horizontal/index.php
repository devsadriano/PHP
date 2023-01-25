<?php
$array  = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'empresa' => 'B7WEB',
    'cor' => 'Azul',
    'profissao' => 'Fazedor Bolo'
];
$chaves = array_keys($array);
$valores = array_values($array);
?>
<table border="1">
        <tr>
            <?php foreach($chaves as $chave): ?>
                <th> <?php echo $chave; ?> </th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach($valores as $valor): ?>
                <td> <?php echo $valor; ?> </td>
            <?php endforeach; ?>
        </tr>
</table>

<!--
essa tabela tem 2 linhas
o q vai ser dinamico as colunas 
tanto n 1 linha qto na 2 a qtde colunas v ser dependente do array vai depender de quais colunas eu tenho no array
entao tenho q fazer loop pra criar as colunas
vamos criar outro array apenas c as chaves e depois faco loop pra resolver da 1 linha q mostra apenas as chaves
depois faco array so c valores e faco loop exibindo apenas os valores
vao ser 2 loops pra fazer  
-->




<!--
    fazenodo com array normal sem 
$chaves = array_keys($array);
$valores = array_values($array);
-->
<br>
<?php
$array  = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'empresa' => 'B7WEB',
    'cor' => 'Azul',
    'profissao' => 'Fazedor Bolo'
];
?>
<table border="1">
        <tr>
            <?php foreach($array as $chave => $valor): ?>
                <th> <?php echo $chave; ?> </th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach($array as $chave => $valor): ?>
                <td> <?php echo $valor; ?> </td>
            <?php endforeach; ?>
        </tr>
</table>

