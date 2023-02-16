<?php

$hash =  '$2y$10$1uWHvfzpJB4K5fn8sfS/Oer0XJXOTlpA7b1g5CiadH4Re7vu.W.sq';
$senha = '1235';

if (password_verify($senha, $hash)) {
    echo 'Senha correta!';  
} else {
    echo 'Senha errada !';
}
