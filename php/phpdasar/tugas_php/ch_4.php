<?php 

echo date( "l d-M-Y", strtotime("17 august 2022") );

$nama_ikan = ["Piranha","Bandeng","Lele","Hiu","Paus","Lumba-Lumba","Nemo"];


$no = [1,2,3];

$nama = ["Joni","Intan","Salma"];

$kelas = ["XII RPL1","XII TKRO1","XII TB1" ];
$alamat = ["Pekalongan","Batang","pemalang"];
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
<div><?php echo $nama_ikan[6];?></div>

<br>

<table border="1" cellpadding="10" cellspacing="0">


<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Alamat</th>
</tr>

<tr>
  
    <td><?php echo $no[0]; ?></td>
    <td><?php echo $nama[0];?></td>
    <td><?php echo $kelas[0];?></td>
    <td><?php echo $alamat[0];?></td>
 
</tr>
<tr>
  
    <td><?php echo $no[1]; ?></td>
    <td><?php echo $nama[1];?></td>
    <td><?php echo $kelas[1];?></td>
    <td><?php echo $alamat[1];?></td>
 
</tr>



</table>
</body>
</html>
