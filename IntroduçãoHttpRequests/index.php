<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="apagar.php">Apagar Cookie</a>
<br>
<br>
<form method="GET" action="recebedor.php">

    <label>
        Nome:
        <br>
        <input type="text" name="nome">
    </label>
    <br>
    <br>

    <label>
        E-mail:
        <br>
        <input type="text" name="email">
    </label>
    <br>
    <br>

    <label>
        Idade:
        <br>
        <input type="text" name="idade">
    </label>
    <br>
    <br>

    <input type="submit" value="Enviar">
</form>


<!-- action="" é pra onde vai o formulário enviado com o metodo post -->
<!-- o metodo posto envia internamente os dados -->
<!-- agora se enviar pelo get ja aparece o q foi enviado http://localhost:8000/recebedor.php?nome=hvihyv&idade=4 -->
<!-- pelo get ele envio atraves da url o usuario consegue ver o q foi enviado -->
<!-- quando eu n coloca a action action="recebedor.php" o envio forulario vai pra pripria pagina -->
<!-- Qual o método de uma requisição HTTP no qual se pode visualizar os parâmetros enviados através de um formulário HTML na URL do navegador? -->
<!-- method="GET" -->