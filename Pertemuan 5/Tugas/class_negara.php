<?php

    class Vehicle {
        protected $type;
        protected $fuel;
        protected $argv;

        protected function __construct($type, $fuel, $argv) {
            $this->type = $type;
            $this->fuel = $fuel;
            $this->argv = $argv;
        }

        protected function getInfo() {
            echo 'Nama Negara: ' . $this->type . '<br>';
            echo 'Mata Uang: ' . $this->fuel . '<br>';
        }
    }

    class Indonesia extends Vehicle {
        public $wheels;

        public function __construct($type, $fuel, $argv, $wheels) {
            parent::__construct($type, $fuel, $argv);
            $this->wheels = $wheels;
        }

        
        public function getInfoIndonesia() {
            parent::getInfo();
            echo 'Jumlah Penduduk: ' . $this->wheels . '<br>';
        }
    }

    class Jepang extends Vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $argv, $max_depth) {
            parent::__construct($type, $fuel, $GLOBALS);
            $this->max_depth = $max_depth;
        }

        public function getInfoJepang() {
            parent::getInfo();
            echo 'Jumlah Penduduk: ' . $this->max_depth . '<br>';
        }
    }

    class Arab extends Vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $argv, $max_depth) {
            parent::__construct($type, $fuel, $GLOBALS);
            $this->max_depth = $max_depth;
        }

        public function getInfoArab() {
            parent::getInfo();
            echo 'Jumlah Penduduk: ' . $this->max_depth . '<br>';
        }
    }
?>