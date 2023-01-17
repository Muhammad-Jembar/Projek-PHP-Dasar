<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg{
            background-color:red;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding = "10" cellspacing = "0">

    <?php for($x = 1; $x <= 5; $x++) : ?>
        <?php if($x % 2 == 1) : ?>
          <tr class="bg">
            <?php else : ?>
            <tr>
        <?php endif;?>

            <?php  for($y = 1; $y <= 5; $y++) : ?>
            <td><?php echo "$x, $y;" ?></td>
        <?php endfor;?>
        </tr>


    <?php endfor; ?>
    
 
<?php 

$x = 5;
$y = 10;
$z = 15;
$w = 20; 
if ($x <= 10) {
    echo "$x";
} 
if ($y <= 15) {
    echo "$y";
} 
if ($z <= 15) {
   echo "$z";
}
if ($w <= 20) {
    echo "$w";
}
if ($w >= 2) {
    echo "$w";
} else {
    echo "benar";
}


  
?>



</body>
</html>