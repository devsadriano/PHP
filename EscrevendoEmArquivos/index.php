<?php
//como escrever em arquivos externos
//file_get vai pegar
//file_put_contents se arquivo n existir ele vai criar se ele ja existir ele vai substituir
// 2 parametros  1 nome arquivo 'nomeeeee.txt' e 2 conteudo $texto  

// $texto = 'Bonieky Lacerda';
// file_put_contents('nomeeeee.txt', $texto);
// echo 'Arquivo criado com sucesso!';

//agora vamos ler texto de textooo.txt   $texto = file_get_contents('texto.txt');
//depois vamos adiconar uma nova linha a esse texto
//estou preservando arquivo inicial e adicionando conteudo novo
$texto = file_get_contents('textoooo.txt');
$texto .= "\nAdriano";
file_put_contents('textoooo.txt', $texto);
echo 'Arquivo criado com sucesso!';
//aqui eu li e acicionei conteudo