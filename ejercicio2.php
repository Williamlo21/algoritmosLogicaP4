<?php

function quickStor($arr){
    $length = count($arr);
    if ($length <= 1){
        return $arr;
    }

    $pivot = $arr[$length-1];

    $left = $right = [];

    for ($i = 0; $i < $length - 1; $i++){
        if ($arr[$i]< $pivot){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    $left = quickStor($left);
    $right = quickStor($right);

    return array_merge($left, [$pivot], $right);

}

$lista = [64,34,25,12,22,11,90];
$resultado = quickStor($lista);

echo "lista ordenada: ";
foreach($resultado as $valor){
    echo $valor . " ";
}