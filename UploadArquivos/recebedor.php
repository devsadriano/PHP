<?php
echo '<pre>';
print_r($_FILES);

// $nome = $_FILES['arquivo']['name']; jeito errado
// $nome = md5(time().rand(0, 1000)).'.jpg';
// move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

//supondo q eu que quero formulario q so aceite imagem
//primeiro vou conferir type desse arquivo esta dentro da lista types q eu quero
//vamos usar funca 

//lista arquivos permitidos
$permitidos = ['image/jpeg', 'image/png', 'image/png'];

if (in_array($_FILES['arquivo']['type'], $permitidos)) {  
    $nome = md5(time().rand(0, 1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    echo 'Arquivo salvo com sucesso!';
}else{
    echo 'Arquivo não permitido!';
}

//posso colocar nome novo ou mesmo
//o jeito mais seguro e eu criar o proprio nome, no caso usamos assim pra dificultar ter nome igual $nome = md5(time().rand(0, 1000)).'.jpg;
//com isso podemos gerar novos aquivos pq n vai estar duplicado 

//move_uploaded_file();
//1 parametro onde é q ta aqruivo na pasta temporaria



// a variavel global $_FILES é um array dentro dele campo arquivo de onde ele veio do meu formulario name="arquivo" e nesse arquivo tem informacoes variavel global
// qdo fazemos upload arquivo pro servidor ele recebe arquivo e armazena temporariamente em local no caso  tmp_name é onde ele armazeno
//[tmp_name] => C:\Users\adriano.rocha\AppData\Local\Temp\phpC23E.tmp
//[type] => image/jpeg mostra qual tipo original arquivo
// se eu n usar o arquivo ele se deleta qdo sair
//agora se eu quiser aproveitar ele momo ele de dentro do temporario tem uma funcao p isso n php
//move_uploaded_file();
//1 paramatro onde q ta arquivo n pasata temporaria


// Array
// (
//     [arquivo] => Array
//         (
//             [name] => WhatsApp Image 2023-01-20 at 09.42.20.jpeg
//             [type] => image/jpeg
//             [tmp_name] => C:\Users\adriano.rocha\AppData\Local\Temp\phpC23E.tmp
//             [error] => 0
//             [size] => 152774
//         )

// )





// Sabe-se que no PHP existem mecanismos para identificar os tipos de arquivos que determinado sistema poderá recebecer em determinadas ocasiões que são:
//     1 - MIME type (tipo do arquivo);
//     2 - Sufixal (sufixo no nome do arquivo);
//     3 - Code Hidden (código embutido no arquivo);
//     Certo desenvolvedor precisa verificar os arquivos que serão enviados ao sistema para evitar certos tipos de ataques maliciosos.
//     Marque abaixo sobre a confiabilidade dos mecanismos que ele deverá observar.
//1 - confiável; 2 - não confiável; 3 - não confiável;