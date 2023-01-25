<?php
// // no geral trabalhamos com data em php em milessegundos
// //01/01/1970 é onde php e javascript começa a contar os milessegundos
// //echo time(); o resultado 1674068393 é o tmepo em milessegundos desde 1970
// echo time()." milessegundos"."<br/>";


// echo date('d/m/Y H:i:s')." formato brasil"."<br/>";
// //essa funca tem dois parametros o primeiro vou colocar o formato q quero exibir aquela data no caso do brasil é  'd' de dia 'm' de mes e 'Y' de ano 
// //H:i:s hora minuto segundo se de onde servidor estiver configurado a hora geralmente de greenwich na europa
// // 'Y-m-d' padrao internacional é como salva em BD
// $data = '2020-03-07';
// $time = strtotime($data);
// echo $time." assim mostra os milessegundos, quando mandamos a data ele trasforma em time"."<br/>"; //assim mostra os milessegundos, quando mandamos a data ele trasforma em time
// //uma vez q peguei o time especifico eu tenho como usar o segundo parametro parametro da minha funcao date
// echo date('d/m/Y')." assim mostra data atual"."<br/>";
// //quando uso segundo parametro tenho como colocar a qtde de time q eu quero
// echo date('d/m/Y', 0)." mostra data de acordo como coloquei desde inicio 0"."<br/>";
// // se eu colocar 0 mostra a data de acordo q eu coloquei no caso 0 desde inicio 1970
// echo date('d-m-Y', $time)." mostra data de acordo como coloquei a data certa atual"."<br/>";
// //se eu a variavle $time vai mostrar a data atual so q no padrao q eu defini

//simplificando
$data = '2020-03-07';
echo date('d/m/Y', strtotime($data));
// mostra data no formato q eu quiser 07/03/2020
//funcao strtotime() pega string no formato internacional e trasforma em time 
// funcao date() formata e mostra alguma data se eu n colocar segundo paramtro mostra data atual e se eu colocar segundo parametro vai usar como um time e vai mostrar a data atual formatada 