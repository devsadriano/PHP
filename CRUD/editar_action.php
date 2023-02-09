<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
    //update usuarios SET name = '...', email = '...' WHERE id = '...'
    $sql = $pdo->prepare("UPDATE usuarios SET name = ':name', email = ':email', id = ':id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: adicionar.php');
    exit;

}else {
    header('Location: adicionar.php');
    exit;
}
