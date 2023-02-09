<?php
$pdo = new PDO("pgsql:dbname=php_bonieky;host=localhost", "postgres", "spfc1695");

$sql = $pdo->query('SELECT * FROM schemaphp.testephpp');

//echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

echo '<pre>';
print_r($dados);







// //aqui passamos uns itens no construtor dessa classe
// //primeiro serie comando q gente especifica os dadosn iniciais de conexao do BD por exemplo qual é o tipo de BD
// // mysql =  tipo BD
// // dbname= = data base nome BD que é test
// // host= = ou seja onde é q tá o BD onde ele tá funcionando no caso é localhost ou 127.0.0.1 ou o IP
// //agora preciso dizer a ele o usuario e senha no segundo e terceiro parametro
// //$pdo = new PDO("mysql:dbname=test;host=localhost", "root", ""); //dados iniciais inseridos
// //$pdo = new PDO("mysql:dbname=test;host=localhost", "root"); //qdo n tem senha pode ficar assim
// $pdo = new PDO("pgsql:dbname=tutorial;host=localhost", "postgres", "spfc1695");
// //agora teste se n der erro e pq funciono

// //depois q foi feita conexao vamos pegar um dado no caso pegar lista informacoes q tem la
// // query(''); é consulta pode ser inserir atualizar deletar
// $sql = $pdo->query('SELECT * FROM atendimento.atendimentos');
// // atendimento.atendimentos  schema/tabela
// // print_r($sql);
// // quero saber quantos itens tem
// // row significa linha ou seja contagem linhas 

// echo "TOTAL: ".$sql->rowCount();

// // agora vou mostrar na tela
// $dados = $sql->fetchAll( PDO::FETCH_ASSOC );
// // fetchAll ou seja pegar todos
// // no parametro definimos a associacao q queremos senao ira duplicar
// //vamos usar uma constante estatica do PDO ou seja PDO::FETCH_ASSOC iso vai fazer com q ele associe entao n vai ter mais essa duplicidade de dados  
// //echo '<pre>';
// //print_r($dados);

