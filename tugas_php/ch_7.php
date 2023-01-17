<?php 

echo date( "l d-M-Y", strtotime("17 august 2022") );

$nama_ikan = ["Piranha","Bandeng","Lele","Hiu","Paus","Lumba-Lumba","Nemo"];


$no = [1,2,3];

$nama = ["Joni","Intan","Salma"];

$kelas = ["XII RPL1","XII TKRO1","XII TB1" ];
$alamat = ["Pekalongan","Batang","pemalang"];

$nomor = [
    [ "Joni","XII RPL1","pemalang"],
    [ "Intan","XII TKJ2","Pekalongan"],
    [ "Putri","XII RPL1","Pekalongan"],
    [ "Riska","XII RPL1","Pekalongan"],
    [ "Riska","XII RPL1","Pekalongan"],
    [ "Jembar","XII RPL1","Pekalongan"],
    [ "Rehan","XII RPL1","Pekalongan"]
   
];



$n = 1;

$angka = 1;

$nama2 = [
          
    [   
        "No" => "",
        "Nama" => "M. Jembar Risky",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ],

    [ 
        "No" => "",
        "Nama" => "Putri",
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
<div><?php echo $nama_ikan[6];?></div>

<br>

<table border="1" cellpadding="10" cellspacing="0">


<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Alamat</th>
</tr>

<?php foreach($nomor as $no) : ?>

    <tr>
        <td><?=  $n++; ?></td>
        <td><?=  $no[0] ?></td>
        <td><?=  $no[1] ?></td>
        <td><?=  $no[2] ?></td>
       
    </tr>



    <?php endforeach; ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">


    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>

    

   <?php foreach($nama2 as $nama) : ?>
    <tr>
        <td><?= $angka++; ?></td>
        <td><?= $nama["Nama"]; ?></td>
        <td><?= $nama["Kelas"]; ?></td>
        <td><?= $nama["Alamat"]; ?></td>
    </tr>

    <?php endforeach;?>



    </table>


</body>
</html>