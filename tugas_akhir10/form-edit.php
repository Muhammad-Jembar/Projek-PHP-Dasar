<?php


  // menggunakan session_start();

   
 session_start();

 if( !isset($_SESSION["login"])) {
   header("Location: login.php");
   exit;
 }
    
    require 'function.php';

    // ambil id dari list

     $id = $_GET['id'];


    $siswa = query("SELECT * FROM tb_siswa WHERE id = $id")[0];

    // tombol simpan 

    if (isset($_POST["simpan"]) ) {

    
      if ( ubah($_POST) > 0 ) {
 

        echo "
        <script>
          alert('data berhasil di ubah');
          document.location.href = 'list-siswa.php'
        </script>  
        ";
    
     } else {
     
        echo "
        <script>
          alert('data gagal');
          document.location.href = 'list-siswa.php'
        </script>   
        ";


      }





    }

// menggunakan $_GET 

// if( !isset($_GET['id'])) {
   
//     // kembali ke list-siswa.php
//     // kembali menggunakan header
//    header("Location: list-siswa.php");
// }
    
//    // query sql

//   // mysqli_fetch_assoc
//   // penggulangan array dari list-siswa.php

//   // ambil id dari list-siswa.php

//   $id = $_GET['id'];

//   $sql = "SELECT * FROM tb_siswa WHERE id=$id";
//   $query = mysqli_query($db, $sql);
//   $nama = mysqli_fetch_assoc($query);




  // jika data < 1
  // menggunakan mysqli_num_rows
  // kembali ke list-siswa.php
  // tampilkan pesan/die


  // menggunakan operator ternary
  // untuk input type=radio (cheaked) 
  // checked dan selected

   

  // hidden = menyimpan id di list-siswa.php
  // yang akan di update




  


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

     input::placeholder {
      text-align: center;
     }

     h2 {
      text-align: center;
     }

    </style>


</head>
<body>

 <h2>Silakan Ubah Data</h2>



<form action="" method="POST">


<fieldset>

  <input type="hidden" name="id" value="<?php echo $siswa["id"]; ?>" />

 <p>
 <label for="nis">Nis: </label>
 <input type="text" class="tampilan" name="nis" placeholder="ubah nis" value="<?php echo $siswa["nis"]; ?>" />
</p>


<p>
 <label for="nama">Nama: </label>
 <input type="text" class="tampilan2" name="nama" placeholder="ubah nis" value="<?php echo $siswa["nama"]; ?>" />

</p>



<p>
 <label for="jenis_kelamin">Jenis kelamin: </label>
 <?php $jk = $siswa["jenis_kelamin"]; ?>
 <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>laki-laki</label>
 <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan</label>
</p>

<p>
 <label for="alamat">Alamat: </label>
<textarea name="alamat" id="" cols="20" rows="10"><?php echo $siswa["alamat"]; ?></textarea>
</p>

<p>
    <input type="submit" value="Simpan" name="simpan" />
</p>


</fieldset>
</form>
  
 
    
</body>
</html>