<?php

    require_once 'class_lingkaran.php';

    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $lingkar 1 = new Lingkaran (8);
    $lingkar 2 = new Lingkaran (27);
    
    echo '<br><br>';
    echo '<br>Luas lingkaran 1 adalah' . $lingkar 1->getLuas() . 'cm';
    echo '<br>Luas lingkaran 2 adalah' . $lingkar 2->getLuas() . 'cm';

    //keliling
    echo '<br><br>';
    echo '<br>Luas keliling 1 adalah' . $keliling 1->getKel() . 'cm';
    echo '<br>Luas keliling 2 adalah' . $keliling 1->getKel() . 'cm';
?>