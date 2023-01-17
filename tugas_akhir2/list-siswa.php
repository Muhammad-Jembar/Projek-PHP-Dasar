<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

      <p>
        <a href="form.php">[+] tambahkan data</a>
      </p>

    
      <table border="1" cellpadding="10" cellspacing="0">
        
      <tr>
        <th>id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tindakan</th>
      </tr>
      <tbody>
       
      <?php 
      $sql = "SELECT * FROM tb_siswa";
      $query = mysqli_query($db, $sql);

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