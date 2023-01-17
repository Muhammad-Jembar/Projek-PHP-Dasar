<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
      <thead>
          <tr>
              <th>no</th>
              <th>id</th>            
              <th>Nama</th>
              <th>Alamat</th>
              <th>jenis kelamin</th>
              <th>Agama</th>
              <th>Sekolah Asal</th>
              <th>Tindakan</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $sql = "SELECT * FROM tb_siswa";
          $query = mysqli_query($db, $sql);
          $no = 1;

          while($siswa = mysqli_fetch_array($query)){
              echo "<tr>";
              
              echo "<td>".$no++."</td>";
    
              echo "<td>".$siswa['id']."</td>";
              echo "<td>".$siswa['nama']."</td>";
              echo "<td>".$siswa['alamat']."</td>";
              echo "<td>".$siswa['jenis_kelamin']."</td>";
              echo "<td>".$siswa['agama']."</td>";
              echo "<td>".$siswa['sekolah_asal']."</td>";

              echo "<td>";
              echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
              echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
              echo "</td>";

              echo "</tr>";
              

          }
          ?>

      </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>