<?php 

$merk_motor = "Yamaha Jupiter MX";

if ($merk_motor == "Yamaha mio 2019") {
    $harga = "16.000.000";
    
} else if  ($merk_motor == "Yamaha Jupiter MX 2014") {
    $harga = "11.000.000";
    
} else if ($merk_motor == "Honda Vario 125cc 2020") {
    $harga = "18.000.000";

} else if ($merk_motor == "Honda Supra 125 2015") {
    $harga = "10.000.000";

} else if ($merk_motor == "Honda PCX 150cc 2018") {
    $harga = "23.000.000";

} else {
    echo "Barang tidak Tersedia";
}

echo ("harga motor ". $merk_motor. " adalah ". " = ". $harga);



?>



<?php 

$nama = ["Muhammad Jembar Risky"];

$kelas = ["XII RPL1"];

$alamat = ["Jalan Seroja 01 no.50"];




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

<ul>
    <?php foreach($nama as $a) :?>
    <li> Nama: <?php echo "$a"; ?></li>

    
    

    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach($kelas as $b) :?>
    <li> Kelas : <?php echo "$b"; ?></li>
    

    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach($alamat as $c) :?>
    <li> Alamat : <?php echo "$c"; ?></li>
    

    <?php endforeach; ?>
</ul>

<?php 

echo date( "l d-F-Y", strtotime("17 august 2022") );


?>


</body>
</html>
