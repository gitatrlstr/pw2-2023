<?php

    require_once 'class_handuk.php';

    // object
    $Ayah = new Ayah('Biru', 'Polos', 20000);
    $Bunda = new Bunda('Merah', 'Batik', 25000);
    $Bayi = new Bayi('Putih', 'Barbie', 15000);

    // echo
    echo "Info Ayah:<br>";
    $ayah->getInfoAyah();
    echo "<br>";

    echo "Info Bunda:<br>";
    $bunda->getInfoBunda();
    echo "<br>";

    echo "Info Bayi:<br>";
    $bayi->getInfoBayi();
    echo "<br>";
    
?>