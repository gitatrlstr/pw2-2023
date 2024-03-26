<?php

    require_once 'class_negara.php';

    // object
    $Indonesia = new Indonesia('Indonesia', 'Rupiah', 279072446);
    $Jepang = new Jepang('Jepang', 'Yen', 122809981);
    $Arab = new Arab('Arab', 'SAR', 37324010);

    //echo
    echo 'Info Indonesia:<br>';
    $indonesia->getInfoIndonesia();
    echo '<br>';

    echo 'Info Jepang:<br>';
    $jepang->getInfoJepang();
    echo '<br>';

    echo 'Info Arab:<br>';
    $arab->getInfoArab();
    echo '<br>';

?>