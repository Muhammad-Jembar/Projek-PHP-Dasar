<?php


include("config.php"); 
 
 //$sql = "SELECT * FROM tb_siswa";
// $query = mysqli_query($db, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
      tr td {
        height: 50px;
        width: 70px;
      }

     .tampilan {
      height: 70px;
      background-color: rgb(0, 150, 207);
      
     }
     
     a {
      
      text-decoration: none;

     }

     .tampilan2 {
     height: 20px;

     }
    
    
    </style>
</head>
<body>
    

      <p>
        <a href="form.php">[+] tambahkan data</a>
      </p>
       
     <form action="" method="POST">

     

     <input type="text" name="keyword" class="tampilan2" placeholder="Masukan data pencarian.."  size="40" autofocus autocomplate="off">
     <input type="submit" value="Cari" name="cari">

  

     </form>


     

     <br>
        
      
     
    
      <table border="1" cellpadding="10" cellspacing="0">
        
      <tr class="tampilan">
        <th>id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tindakan</th>
      </tr>
      <tbody>
       
      <?php 


      if( isset($_POST['cari']) ) {

        $keyword = $_POST['keyword'];

      $sql = "SELECT * FROM tb_siswa";
      $query = mysqli_query($db, $sql);
      $siswa = mysqli_fetch_assoc($query);
      
      }

     // apakah tombol cari sudah di tekan


    


    // function cari($keyword) {
     // $query = "SELECT * FROM tb_siswa 
                // WHERE 
               //  nama = '$keyword'
     // ";
     
   //  return query($sql);

  //  }
      // $sql = "SELECT * FROM tb_siswa";
      // $query = mysqli_query($db, $sql);

     // if(isset($_POST['cari'])){


     //  $keyword = trim($_POST['cari']);

      // $sql = "SELECT * FROM tb_siswa";


      
    
     //  } else {
      //  $sql = "SELECT * FROM tb_siswa WHERE nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin '%$keyword%'";
      
        

     // }
   

     // $result = mysqli_query($db, $sql);
     
     
      // mengunakan no++

      $no = 1;

      while($siswa = mysqli_fetch_array( $query )){

       
        
        echo "<tr>";
       
        echo "<td>".$siswa['id']."</td>";
        echo "<td>".$siswa['nis']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
       

         
        echo "<td>";
        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";

      }
      
     
      
      ?>

      </tbody>


      </table>

      <p>Total: <?php echo mysqli_num_rows( $query ); ?></p>





</body>
</html>