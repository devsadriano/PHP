<?php
unlink('lista.txt');
echo 'Arq Exluido';
// unlink exlui arquivo e nao pasta


//Muitos desenvolvedores evitam usar a função unlink() de forma isolada, pois a mesma pode apagar arquivos muito importantes do projeto. Duas coisas muito importantes que o desenvolvedor deve fazer para evitar perdas acidentais de arquivos com essa função é?

//Backup do projeto e usar uma função de aviso e autenticação para ter acesso a função unlink().