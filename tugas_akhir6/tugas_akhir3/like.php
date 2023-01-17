<?php

include("config.php");

// menggunakan $_GET 

if ( isset($_POST['pilih'])) {

  $keyword = $_POST['keyword'];
        
    
        
    // kembali ke list-siswa.php
    // kembali menggunakan header
   header("Location: list-siswa.php");
}

   $sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%".$keyword."%'";
   $query = mysqli_query($db, $sql);
   $siswa = mysqli_fetch_assoc($query);

?>



<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
   
</head>
<body>

    <br>
    <h4>Menampilkan Data pada Tabel berdasarkan pilihan Combo Box di PHP</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
   
      
        
        <input type="text" name="keyword" value="<?php echo $keyword;?>"   required/>
    
        <input type="submit" class="btn btn-info" value="pilih">
   
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <br>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
         
        </tr>
        </thead>
        <?php

        $sql = "SELECT * FROM tb_siswa";
        $query = mysqli_query($db, $sql);
        
        $no=0;
       
         $no++;

            ?>


            <tbody>
          <?php  while( $siswa = mysqli_fetch_assoc($query) ) : ?>
            <tr>
                
                <td><?php echo $siswa["id"]; ?></td>
                <td><?php echo $siswa["nis"];   ?></td>
                <td><?php echo $siswa["nama"];   ?></td>
                <td><?php echo $siswa["jenis_kelamin"];   ?></td>
                <td><?php echo $siswa["alamat"];   ?></td>
                
            </tr>
            <?php endwhile; ?>

            </tbody>
          
       
    </table>
</div>

</body>
</html>