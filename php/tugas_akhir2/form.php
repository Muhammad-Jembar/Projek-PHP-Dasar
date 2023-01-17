<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <p>Silakan Masukan Data</p>

   <form action="proses.php" method="POST">

   <fieldset>

   <p>
   <label for="nis">Nis: </label>
   <input type="text" name="nis" placeholder="nis lengkap">
   </p>

   <p>
    <label for="nama">Nama: </label>
    <input type="text" name="nama" placeholder="nama lengkap">
   </p>
 
   <p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
   <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki</label>
   <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
   </p>

   <p>
   <label for="alamat">Alamat: </label>
   <textarea name="alamat" id="" cols="20" rows="10"></textarea>
   </p>

   <p>
    <button type="submit" value="Daftar" name="daftar">Daftar</button>
   </p>

</fieldset>

   </form>


</body>
</html>