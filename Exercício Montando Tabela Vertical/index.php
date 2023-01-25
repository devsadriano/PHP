<?php

$array  = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'empresa' => 'B7WEB',
    'cor' => 'Azul',
    'profissao' => 'Fazedor Bolo'
];
?>

<!--
na tabela cada informação é uma linha
tenho q pegar tanto a chave qto o valor
$chave => $valor
e cada girada loop vai ser uma informacao uma linha <tr>
e tenho 2 colunas <td>
coluna 1 chave e coluna 2 valor
-->
<table border="1">
    <?php foreach ($array as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach ?>
</table>


<!-- 
como fiz a tabela eu criei um loop
em q cada linha da tabela ela era uma nformção
e peguei a chave da informação e o proprio valor da informacao 
pra exibir e mostrar 

-->
