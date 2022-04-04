<?php
function luaslingkaran($jari){
    $phi = 3.14;
    $rumus = $phi * $jari * $jari;
    return $rumus;
}

echo "Luas lingkaran dengan jari jari 2 adalah ". luaslingkaran(2);


?>