<?php 

 require 'function.php';

 if(isset($_POST["daftar"]) ) {


   // cari tombol

   if (tambah($_POST) > 0 ) {
   
      echo "
      <script>
        alert('data telah di hapus');
        document.location.href = 'list-siswa.php'
      </script>  
      ";
  
   } else {
   
      echo "
      <script>
        alert('data telah di hapus');
        document.location.href = 'list-siswa.php'
      </script>   
      ";
      
  
   }


   }
  

 

  // query sql

 // mysqli_fetch_assoc
 // penggulangan array dari list-siswa.php

 // ambil id dari list-siswa.php

 


// if(isset($_POST['cari'])){
  
//   $query = cari($_POST['keyword']);
// }    //else {
     //$query = mysql_query("SEL

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .tampilan {
      width: 200px;
      height: 30px;
      margin-left: 15px;

     }

     .tampilan2 {
      width: 200px;
      height: 30px;
     }
     
     input::placeholder{
      text-align: center;
     }

     button {
      color: black;
     }
     
     
   h1 {
      text-align: center;
   }
   
   h2 {
      font-size: 20px;
   }
 

    </style>
</head>
<body>
    
   <h1>Pendaftaran Siswa</h1>
   <h2>Silakan Masukan data</h2>

  
   <form action="proses.php" method="POST">

   <fieldset>

   <p>
   <label for="nis">Nis: </label>
   <input type="text" class="tampilan" name="nis" placeholder="masukan nis lengkap">
   </p>

   <p>
    <label for="nama">Nama: </label>
    <input type="text" class="tampilan2" name="nama" placeholder="masukan nama lengkap">
   </p>
 
   <p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
   <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki</label>
   <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
   </p>

   <p>
   <label for="alamat">Alamat: </label>
   <textarea name="alamat" id="" cols="20" rows="10" placeholder="masukan alamat lengkap"></textarea>
   </p>

   <p>
    <button type="submit" value="Daftar" name="daftar">Daftar</button>
   </p>

</fieldset>



   </form>


   <a href="list-siswa.php">kemabali</a>
  

  


</body>
</html>