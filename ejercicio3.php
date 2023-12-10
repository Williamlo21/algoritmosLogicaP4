<?php class mcd{
    public $n1;
    public $n2;

    public function __construct($n1, $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    
    public function getN2()
    {
        return $this->n2;
    }
    public function setN2($n2)
    {
        $this->n2 = $n2;

        return $this;
    }
    public function getN1()
    {
        return $this->n1;
    }
    public function setN1($n1)
    {
        $this->n1 = $n1;

        return $this;
    }
    public function encontrarMCD(){
        $n1 = $this->n1;
        $n2 = $this->n2;

        if ($n2 > $n1) {
            // Intercambiar los valores
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }
        while ($n2 != 0) {
            $temp = $n2;
            $n2 = $n1 % $n2;
            $n1 = $temp;
        }

        echo "El MCD de ". $this->n1 . " y ". $this->n2 . " es: ". $n1;

    }
}
$nuevo = new mcd(39,150);
$nuevo->encontrarMCD();