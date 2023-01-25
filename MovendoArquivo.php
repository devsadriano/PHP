<?php

rename('teste.php', 'teste2.txt');
//1 parametro caminho ate o arquivo q quero renomear

//p mover e a mesma funcao colocando o caminho
rename('teste.php', 'pasta/teste2.txt');

// para copiar e outra funcao
copy('pasta/teste2.txt', 'teste.txt');
// 1 parametro e arquivo q quero copiar
// 2 copia de destino ref url q coloco no caso acima vai pra raiz



//Na aplicação existem 2 pastas , a primeira pasta:
//- controllers
//E a segunda pasta:
//- models
//Dentro da pasta controllers existe um arquivo chamado model.php, mas ele deve ser movido para a pasta models. Indique qual o comando correto para isso

//rename('controllers/model.php', 'models/model.php');