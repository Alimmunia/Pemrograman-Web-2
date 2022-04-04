<?php
require_once "class_mahasiswa.php";

$alim = new Mahasiswa("0001", "Huzaifah Alim", "TI", 3.7);
$irpan = new Mahasiswa("0002", "Muhammad Irpan", "SI", 4);
$zaki = new Mahasiswa("0003", "Zaki Ridwan", "TI", 3.2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>
                NIM
            </th>
            <th>
                Nama
            </th>
            <th>
                Prodi
            </th>
            <th>
                IPK
            </th>
            <th>
                Predikat
            </th>
        </thead>
        <tbody>
            <tr>
                <td>    
                    <?= $alim->nim(); ?>
                </td>
                <td>    
                    <?= $alim->nama(); ?>
                </td>
                <td>    
                <?= $alim->prodi(); ?>
                </td>
                <td>    
                <?= $alim->ipk; ?>
                </td>
                <td>    
                <?= $alim->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $irpan->nim(); ?>
                </td>
                <td>    
                    <?= $irpan->nama(); ?>
                </td>
                <td>    
                <?= $irpan->prodi(); ?>
                </td>
                <td>    
                <?= $irpan->ipk; ?>
                </td>
                <td>    
                <?= $irpan->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $zaki->nim(); ?>
                </td>
                <td>    
                    <?= $zaki->nama(); ?>
                </td>
                <td>    
                <?= $zaki->prodi(); ?>
                </td>
                <td>    
                <?= $zaki->ipk; ?>
                </td>
                <td>    
                <?= $zaki->predikatipk(); ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>