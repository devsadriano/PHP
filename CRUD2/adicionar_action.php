<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    $sql = $pdo->prepare("SELECT * FROM schemaphp.usuarios WHERE email = $email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO schemaphp.usuarios (name, email) VALUES(:name, :email)"); // e um template
        $sql->bindValue(':name', $name); 
        $sql->bindValue(':email', $email);
        $sql->execute();        
        header("Location: index.php");
        exit;
    }else {
        header('Location: adicionar.php');
        exit;
    }
}

// procedimento q tem varias etapas de seguranca basicamente vmaos mntando aos poucos a nossa query e depois executa pdp statement = $pdo->prepare
//  ->prepare()  aq mando o esboço dessa query  
//  bindValue() 1 parametro e quem quero modificar  2 parametro  vai trasformar $name no valor q ta if($name) e jogar no VALUES(:name)
// bindValue() associa o valor q mando
// bindParam() associa o parametro ou seja estou associando a variavel  o q quer dizer  se depois de eu delcarar eu posso torcar 
// sempre q acidionar um item eu volto pro index 


//No processo de create, qual das alternativas a seguir é primordial para que os dados vão para o banco de dados, assim como foi preenchido pelo cliente ?
//Query de inserção dos dados que foi pego no cliente através do formulário.

//[PHP] - Para que não haja duplicidade na inserção de usuário com o mesmo e-mail, é necessário utilizar o método X para verificar a existência do e-mail dentro da tabela. Marque a opção que representa o X da declaração acima.
// rowCount()