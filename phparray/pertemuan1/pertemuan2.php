<?php 

   $angka = [15, 20, 25, 30, 35];

   $angka2 = [40, 45, 50, 55, 57];

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


</body>
</html>