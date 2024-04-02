<?php

    class Handuk {
        protected $jenisHanduk;
        protected $warna;
        protected $gambar;

        public function __construct($jenisHanduk, $warna, $gambar) {
            $this->jenisHanduk = $jenisHanduk;
            $this->warna = $warna;
            $this->gambar = $gambar;
        }

        public function pesanHanduk() {
            echo 'Jenis Takjil: ' . $this->jenisHanduk . '<br>';
            echo 'Rasa: ' . $this->warna . '<br>';
            echo 'Ukuran: ' . $this->gambar . '<br>';
        }
    }

    class Ayah extends Handuk {
        public function __construct($warna, $gambar) {
            parent::__construct('Ayah', $warna, $gambar);
        }

        public function getInfoAyah() {
                parent::getInfo();
                echo 'Harga: ' . $this->wheels . '<br>';
            }
    }

    class Bunda extends Handuk {
        public function __construct($warna, $gambar) {
            parent::__construct('Bunda', $warna, $gambar);
        }

        public function getInfoBunda() {
                parent::getInfo();
                echo 'Harga: ' . $this->wheels . '<br>';
            }
    }

    class Bayi extends Handuk {
        public function __construct($warna, $gambar) {
            parent::__construct('Bayi', $warna, $gambar);
        }

        public function getInfoBayi() {
                parent::getInfo();
                echo 'Harga: ' . $this->wheels . '<br>';
            }
    }


?>