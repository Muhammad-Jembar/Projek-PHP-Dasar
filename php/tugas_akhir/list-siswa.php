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
        <th>Nis</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
      </tr>
      <tbody>
       
      <?php 
      $sql = "SELECT * FROM tb_siswa";
      $query = mysqli_query($db, $sql);


      while($siswa = mysqli_fetch_array( $query )){

        echo "<tr>";

        echo "<td>".$siswa['nis']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
       

        echo "<td>";

        echo "</td>";

        echo "</tr>";

      }
      
      
      
      ?>

      </tbody>


      </table>





</body>
</html>