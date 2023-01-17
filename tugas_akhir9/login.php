<?php 
     
  require 'function.php';

  // tombol sudah di tekan
   
   if(isset($_POST["submit"])) {

    
    $username = $_POST["username"];
    $password = $_POST["password"];


   $result = mysqli_query($db, "SELECT * FROM tb_registrasi WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1 ) {

        // cek password
        
        // cek menggunakan mysqli_fetch_assoc
       $row = mysqli_fetch_assoc($result);
       if( password_verify($password, $row["password"]) ) {
          header("Location: list-siswa.php");
          exit;
       }
    }
    
    $error = true;

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
    
   <h1>Halaman Login</h1>

   
  <?php if( isset($error)) : ?>
     <p style="color: red; font-weight: bold;">Username / Password salah</p>
    <?php endif; ?>


   <form action="" method="POST">

    <p>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
    </p>
     
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
    </p>

     <p>
        <button type="submit" name="submit">Login</button>
     </p>
     
   </form>
   
   
</body>
</html>