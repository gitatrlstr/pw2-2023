<?php

    class Car {
        //hak akses: public, private, protected
        public $brand = 'Tesla';
        public $color = 'Supra';

        //method
        function getBrand() {
            return $this->brand;
        }
        function getName() {
            return $this->color;
        }
    }

    //objek
    $tesla = new Car();
    $supra = new Car();

    //set value / setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';

    //echo
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    echo $supra->getColor();

    //tampilan
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    echo $supra->getColor();

    
?>