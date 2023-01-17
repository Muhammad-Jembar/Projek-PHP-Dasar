<?php 

$merk_motor = "Yamaha Jupiter MX";

if ($merk_motor == "Yamaha mio 2019") {
    $harga = "16.000.000";
    
} else if  ($merk_motor == "Yamaha Jupiter MX") {
    $harga = "11.000.000";
    
} else if ($merk_motor == "Honda Vario") {
    $harga = "18.000.000";

} else if ($merk_motor == "Honda Supra") {
    $harga = "10.000.000";

} else if ($merk_motor == "Honda PCX") {
    $harga = "23.000.000";

} else {
    echo "Barang tidak Tersedia";
}

echo ("harga motor ". $merk_motor. " adalah ". " = ". $harga);



?>
