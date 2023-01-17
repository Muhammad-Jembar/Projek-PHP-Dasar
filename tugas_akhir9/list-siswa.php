<?php

 require 'function.php';
 $murid = query("SELECT * FROM tb_siswa");


 // tombol tekan pada kirim ke function

 if( isset($_POST["cari"]) ) {
  $murid = cari($_POST["keyword"]);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
       
     <form action="" method="post">      

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
          
      <?php foreach($murid as $nama) : ?>
      <tr>
      <td><?php echo $nama["id"]; ?></td>
      <td><?php echo $nama["nis"]; ?></td>
      <td><?php echo $nama["nama"]; ?></td>
      <td><?php echo $nama["jenis_kelamin"]; ?></td>
      <td><?php echo $nama["alamat"]; ?></td>   
       <td>
        <a href="form-edit.php?id=<?php echo $nama["id"]; ?>"><i class="bi bi-pencil-square"></i></a> 
        <a href="hapus.php?id=<?php echo $nama["id"]; ?>"><i class="bi bi-trash-fill"></i></i></a>
       </td>
      </tr>     
  <?php endforeach; ?>

        </table>

      

</body>
</html>