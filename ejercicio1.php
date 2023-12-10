<?php
class Ordenarseleccion{
    private $arr;
    public function __construct($arr)
    {
        $this->arr=$arr;
    }

    public function ordenar(){
        $n = count($this->arr);

        for($i = 0; $i < $n -1; $i++){
            $minIndex = $i;

            for ($j = $i +1; $j < $n; $j++){
                if ($this->arr[$j] < $this->arr[$minIndex]){
                    $minIndex = $j;
                }
            }

            $temp = $this->arr[$i];
            $this->arr[$i] = $this->arr[$minIndex];
            $this->arr[$minIndex] = $temp;
        }

        foreach ($this->arr as $num){
            echo "$num ";
        }
    }
}

$numeros = [0,64,25,12,22,11,22];
$ordenar = new Ordenarseleccion($numeros);
$ordenar->ordenar();