<?php
session_start();
$nome  = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);

// $sobrenome = 'Lacerda';
// filter_var($sobrenome, FILTER_SANITIZE_STRING);


    if ($nome && $idade && $email) {

        setcookie('nome', $nome, time() + 86400 * 30);

        echo 'NOME: '.$nome."<br/>";
        echo 'EMAIL: '.$email."<br/>";
        echo 'IDADE: '.$idade;

    } else {
        $_SESSION['aviso'] = 'Preencha os itens corretamente!'; 

        header("Location: index.php");
        exit;
        //header(); ela vai trocar o header vai trocar o cabeçalho da requisição e vou trocar a informação Location e p onde quero enviar no caso index.php 
        //echo $nome."<br/>".$email."<br/>"."<br/>".$idade;
        // echo 'NAO ENVIOU!'; geralmente redirecionamos p pagina denovo
        //obs: eu só posso fazer troca de header qdo eu n enviei nenhuma informação p navegador
        //exit; ele vai cancelar a execucao 
        //serve p proteger
    }
    


// funcao q pega o campo e tbm verifica se o campo filtra alguma coisa se o campo ta preenchido 
// ela tem 2 parametros mas pode ter 3 ou 4
// 1 parametro é o tipo metodo q foi usado pra enviar ex:get,post
// 2 parametro é o nome do campo 'nome'
// só isso ele ja pega o nome no get e já verifica se tá preenchido ou n
// qdo ele pucha o item e n acha ele retorna falso por isso faz uma verificacao com if
// 3 parametro é o filtro um deles é o FILTER_VALIDATE_EMAIL
// outro é o FILTER_SANITIZE_NUMBER_INT  n é bem validacao é o SANITIZE vai alterar os dados q foram enviados p ficar conformidade com o q espero no caso o q n for numero inteirro ele tira seu eu colocar 90 anos ele tira anos
//agora se eu quiser validar FILTER_VALIDATE_INT ele n pega se n for numero inteiro

// filter_var é qdo eu já tenho uma informação q quero validar e dar essa informação
//filter_var($sobrenome, ) a diferenca e q eu ja tenho a informacao guardada na variavel e o tipo filtro q quero 
//$sobrenome = 'Lacerda';
//filter_var($sobrenome, FILTER_SANITIZE_STRING);

//FILTER_SANITIZE_SPECIAL_CHARS ele vai pegar o codigo digitado e vai trasformar em texto efetivo ele n vai rodar o codigo

// Sessões no PHP
//O que são sessões no PHP?
//São informações armazenadas de cada usuário que está acessando o sistema.
// é o compartilhamento de informacoes
// em uma sessao eu consigo armazenar informações e eu consigo le informacoes infependente da pagina q eu esteja e uma boa forma de mandar uma informação de uma pagina p outra
// outro exemplo  é o login exemplo eu preciso saber quem e vendedor q ta cadastrando no caso ele vai fazer login e eu salvo na sessao essa informacao e todas paginas q ele acessar eu sei q e ele q a acessando
//a diferenca cook e ssao é q sessao fica servidor e cook na maquina
//toda vez q vou usar sessao tenho q colocar comando no inicio pagina session_start();
//n pagina index usará e na pagina recebedor session_start(); se existir ele irá recuperar

//como q faco pra salva informações na sessao?
// $_SESSION['']; vou preencher essa variavel q é um array


//Cookies no PHP
// fica salvo no navegador do usuario
//no nosso caso vamos ler cook e exibir no cabeçalho
//uma vez q usuario digito o nome ele vai pro arquivo recebedor.php e recebendo esse nome vai setar no cookie e agente le no cabeçalho
//dentro entrando no if quer dizer q o cara tem nome entoa vamos setar o cookie no if
//só tem como setar cookie antes da exibição de qqer ctipo de conteudo
//setcookie(); essa funcao tem varios parametros 
// 1 parametro é o nome do cookie no nosso caso é o 'nome'  
// 2 parametro é o valor q vai ficar salvo no cookie
// 3 parametro é qdo q cookie expira no caso time() é agora e ja expira
// time() + 86400 * 30) 86400 milessegundos q é um dia * 30 entao esse cookie vai ter validade da hora desse momento ate 30 dias pra frente depois de 30 dias ele para ou expira   
// agota vamos pro header pra ler o cookie
//como leio cookie: eu vou verificar uma variavel especifica chamada de nome se existir ele if ($_COOKIE['nome'])
//crio uma variavel pra armazenar e concateno c cookie e vai concatenar caso exista

//como deletar cookie
//tenho q setar ele com tempo no passado entao ele expirara