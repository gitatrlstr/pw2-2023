<?php
class Calculator {
    private $number1;
    private $number2;

    public function __construct($num1, $num2) {
        $this->number1 = $num1;
        $this->number2 = $num2;
    }

    public function pertambahan() {
        return $this->number1 + $this->number2;
    }

    public function pengurangan() {
        return $this->number1 - $this->number2;
    }

    public function pembagian() {
        if ($this->number2 == 0) {
            return "Error: Division by zero";
        } else {
            return $this->number1 / $this->number2;
        }
    }

    public function perkalian() {
        return $this->number1 * $this->number2;
    }
}

    //Create an object and display each method
    $calculator = new Calculator(10, 5);
    echo 'Pertambahan:' . $calculator->pertambahan() . '<br>';
    echo 'Pengurangan:' . $calculator->pengurangan() . '<br>';
    echo 'Pembagian:'. $calculator->pembagian() . '<br>';
    echo 'Perkalian:'. $calculator->perkalian() . '<br>';

?>