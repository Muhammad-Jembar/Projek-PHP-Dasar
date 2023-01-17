<?php 
 
 require 'function.php';


 if(isset($_POST["submit"]) ) {


    if( registrasi($_POST)  > 0 ) {
      
        echo "
        <script>
          alert('user berhasil di tambhakan');    
        </script>  
        ";
    
     } else {
     
        echo mysqli_error($db);

    }

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
        label {
            display: block;
        }

        input::placeholder {
        text-align: center;
        }

        input {
            width: 250px;
            height: 30px;

        }

        button {
            height: 30px;
            width: 80px;
            border: none;
            color: white;
            background-color: blue;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    
   <form action="" method="POST">
    
   <p>
    <label for="username">Username: </label>
    <input type="text" name="username" placeholder="Masukkan Username">
   </p>
    
   <p>
   <label for="password">Password: </label>
   <input type="password" name="password" placeholder="Masukkan Password">
   </p>
    
   <p>
    <label for="password2">Konfirmasi Password</label>
    <input type="password" name="password2" placeholder="Konfirmasi Password">
   </p>
   
    
   <p>
    <button type="submit" name="submit">Registrasi</button>
   </p>

   </form>


  
</body>
</html>