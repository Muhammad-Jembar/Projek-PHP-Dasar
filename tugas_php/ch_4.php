<?php 

echo date( "l d-M-Y", strtotime("17 august 2022") );

$nama_ikan = ["Piranha","Bandeng","Lele","Hiu","Paus","Lumba-Lumba","Nemo"];


$no = [1,2,3];

$nomor = 1;

// $nama = ["Joni","Intan","Salma"];

// $kelas = ["XII RPL1","XII TKRO1","XII TB1" ];
// $alamat = ["Pekalongan","Batang","pemalang"];

$nama = [
    [
        "Nama" => "Joni",
        "Kelas" => "XII RPL 1",
        "Alamat" => "Pekalongan"
    ],

    [
        "Nama" => "Intan",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ],

    [
        "Nama" => "Salma",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ]
    
   

    
    ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div><?php echo $nama_ikan[2]; ?></div>
<br>
<div><?php echo $nama_ikan[0]; ?></div>
<div><?php echo $nama_ikan[6]; ?></div>

<br>

<table border="1" cellpadding="10" cellspacing="0">


<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Alamat</th>
</tr>

<?php foreach($nama as $a) : ?>

<tr>  
    <td><?= $nomor++; ?></td>
    <td><?= $a['Nama']; ?></td>
    <td><?= $a['Kelas']; ?></td>
    <td><?= $a['Alamat']; ?></td>
</tr>

<?php endforeach;?>


</table>
</body>
</html>
