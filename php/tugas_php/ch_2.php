<?php 

   $angka = [15, 20, 25, 30, 35];

   $angka2 = [40, 45, 50, 55, 57];

   $angka3 = ["****"];

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
      .kotak {
          height: 50px;
          width: 50px;
          background-color: blue;
          text-align: center;
          font-weight: bold;
          line-height: 50px;
          margin: 2px;
          float: left;
      }

    
      .clear { clear: both; }



    </style>
</head>
<body>
    
 <?php  foreach($angka as $a) { ?>

    <div class="kotak"><?php echo $a; ?></div>

    <?php } ?>

    <div class="clear"></div>

<?php  foreach($angka2 as $b) { ?>

    <div class="kotak"><?php echo $b; ?></div>

    <?php } ?>

    <div class="clear"></div>
    <br>

    <?php  foreach($angka3 as $c) { ?>

        <div><?php echo $c; ?></div>

        <?php } ?>
     

    <?php  for($p = 2; $p <= $c; )  ?>
     <?php echo "***"; ?>

     <br>

     <?php for($x = 1; $x <= $c;) ?>
     <?php echo "**";?>
  
     <br>

     <?php for($y = 3; $y <= $c;) ?>
     <?php echo "*";?>    

</body>
</html>