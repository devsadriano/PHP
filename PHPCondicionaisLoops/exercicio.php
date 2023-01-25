<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo '-';
    }
    echo "<br>";
}

$i = 0;

while($i < 10){
    for($x = 0; $x < 9; $x++){
        echo '-';
    };
    $i++;
    echo '-';
    echo"<br>";
};


for($i= 0; $i <= 20; $i++) {
    for($j = 0; $j<$i; $j++) {
        echo'-';
    };

    echo '<br/>';
};