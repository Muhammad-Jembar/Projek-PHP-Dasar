<?php 

//$x = 10;
//while( $x < 20){
  
   // echo "Nama Saya <br>";
   // $x++;

//}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

     tr{
         background-color: red;
     }
     .bg{
         background-color: white;
     }


</style>
</head>
<body>

<table border=1 cellpadding="10" cellspacing="0">


<?php 

for($x = 1; $x <= 3; $x++){


    echo "<tr>";

    


    for($y = 2; $y <= 5; $y++){
        echo "<td> $x, $y </td>";
    }


    echo "</tr>";

}



?>


<tr class="tampilan">

<?php  if ($x % 2 == 1): ?>

<?php else : ?>

<?php endif; ?>








</table>

<table border=1 cellpadding="10" cellspacing="0">


<?php 

// tabel 2 php
for($r = 1; $r <= 2; $r++){
    
    echo"<tr> <br>";



  for($i = 2; $i <= 5; $i++){
      echo"<td> $r, $i</td> <br>";
  }

  echo"</tr> <br>";
}

?>
</table>

<br>

<table border=1 cellpadding="10" cellspacing="0">

<?php for($w = 1; $w <= 5; $w++ ) : ?>

 <?php  if($w % 2 == 0): ?>

 
 <tr class="bg">

 <?php  else : ?>
 </tr>
<?php endif;?>



<?php  for($a = 1; $a <= 5; $a++) : ?>
<td><?php echo "$w, $a";?> </td>

<?php endfor;?>

</tr>


<?php endfor; ?>


</table>

<br>

<table border="1" cellpadding="10" cellpsacing="0">

<?php 

$grade = 80;
$nilai = 89;

$x = 90;
$y = 100;

$o = 70;
$t = 83;



if ($grade <= 80) {
   
    echo "  $grade - $nilai";

} else {
    echo "kurang";
}


if ( $nilai >= 80) {
    echo " = baik";
} else {
    echo "salah";
}


if($x <= 90) {
    echo " <br> $x - $y";
} else {
    echo "kurang";
}

if($y <= 100){
    echo " = baik";
} else {
    echo "salah";
}


if($o <= 90){
    echo " <br> $o - $t";
} else {
    echo "kurang";
}

if($t <= 83){
    echo "  = kurang baik";
} else {
    echo "kurang";
}






?>


</table>

    
</body>
</html>

