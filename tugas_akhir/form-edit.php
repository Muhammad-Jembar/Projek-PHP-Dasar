<?php

include("config.php");

// menggunakan $_GET 

if( !isset($_GET['id'])) {
   
    // kembali ke list-siswa.php
    // kembali menggunakan header
   header("Location: list-siswa.php");

    
   // query sql

  // mysqli_fetch_assoc
  // penggulangan array dari list-siswa.php

  $sql = "SELECT * FROM tb_siswa WHERE id=$id";
  $query = mysqli_query($db, $sql);
  $siswa = mysqli_fetch_assoc($query);

}




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

  
    
</body>
</html>