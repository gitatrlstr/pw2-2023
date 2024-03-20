<?php

    require_once 'class_kendaraan.php';

    // object
    $motor = new Motor('Motor', 'Bensin', 2);
    $submarine = new Submarine('Submarine', 'Solar', 10000);

    //echo
    echo 'Info Motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

    echo 'Info Submarine:<br>';
    $submarine->getInfoSubmarine();

?>