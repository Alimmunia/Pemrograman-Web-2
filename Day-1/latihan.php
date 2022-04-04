<?php
//variable user
    $nama = 'Alim ';
    $umur = 19;
    $berat = 55;
    //pake kutip 1
    echo    'Halo nama Saya '. $nama . 'Umur Saya '. $umur. ' Berat Saya '. $berat;
    echo "<hr>";
    //pake kutip 2
    echo "<h1 style='color : red'>Nama Saya $nama umur saya $umur berat saya $berat</h1>";
    echo "<hr>";

//variable sistem
    echo 'Dokumen Root '. $_SERVER["DOCUMENT_ROOT"];
    echo "<hr>";

//variable konstan
    define('makanan', 'Seblak');
    echo '<h1 style="color : red">'. makanan. '</h1>';
?>