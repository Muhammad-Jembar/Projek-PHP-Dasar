<?php 
  
  // menggunakan sesseion_start();
  session_start();  

  if(isset($_SESSION["login"]) ) {
   header("Location: list-siswa.php");
   exit;
  }

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

         // set session 
          $_SESSION["login"] = true;
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
    <style>
        body {
        display: flex;
        align-items: center;
        text-align: center;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,9,121,1) 35%, rgba(0,212,255,1) 100%);
        }
  
        label {
            display: block;
            margin-left: 20px;
            margin-top: 20px;
        }

        input::placeholder {
       
        }
      
        .wrapper {
            height: 300px;
            width: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: white;
            border-radius: 20px;
          

        }

        input {
            width: 250px;
            height: 40px;
            margin-left: 20px;
            border-radius: 10px;
            border: none;
            border: 2px solid black;
        }

        button {
            height: 40px;
            width: 255px;
            border: none;
            color: white;
            background-color: blue;
            border-radius: 20px;
            margin-left: 25px;
        }

     button:hover {
      background-color: blue;
      opacity: 0.5;
    }
    </style>
</head>
<body>
    
   

   
  <?php if( isset($error)) : ?>
     <p style="color: red; font-weight: bold;">Username / Password salah</p>
    <?php endif; ?>

   <div class="wrapper">
   <form action="" method="POST">

    <p>
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="Masukkan Username">
    </p>
     
    <p>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="Masukkan Password">
    </p>

     <p>
        <button type="submit" name="submit">Login</button>
     </p>
     
   </form>
  </div>
   
</body>
</html>