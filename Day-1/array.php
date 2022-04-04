<?php
    $mahasiswa = ['Alim', 'Huzaifah', 'Irpan'];
    echo $mahasiswa[0];
    echo '_';
    echo $mahasiswa[1];
    echo '_';
    echo $mahasiswa[2];
    echo '<br>';
    echo '<br>';
    //foreach
    foreach($mahasiswa as $nama){
        echo $nama;
    }
    //multidimention
    $mahasiswa = [
        ["nama" => "Alim", "nim" => "0110221227", "Uts" => 100, "Uas" => 80],
        ["nama" => "Huzaifah", "nim" => "0110221228", "Uts" => 70, "Uas" => 50]
    ];
    
    foreach($mahasiswa as $mhs){
        echo $mhs["nama"];
    };
    
?>