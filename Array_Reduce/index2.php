<?php
$pessoas = [
    ['nome' => 'fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'cintina', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'jessica', 'sexo' => 'F', 'nota' => 9],
];
//quero contar quantos aluos sexo masculino eu tenho
// agora a soma de todas notas de todos homens p poder tirar media depois

//Total de Homens
function contar_m($subtotal, $item){
    if ($item['sexo'] === 'M') {
        $subtotal ++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');


// Soma das notas dos Homens
function soma_m($subtotal, $item){
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}
$soma_m = array_reduce($pessoas, 'soma_m');

// Média dos homens
$media_m = $soma_m / $total_m;

echo "Total de homens: ".$total_m."<br/>";
echo "Soma das notas de homens: ".$soma_m."<br/>";
echo "Media dos homens: ".$media_m."<br/>";