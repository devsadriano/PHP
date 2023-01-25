<?php

$data = '2020-01-03';
echo date('d/m/y %A', strtotime($data));

$data = '2020-01-03';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

echo strftime(' %A', strtotime($data));

