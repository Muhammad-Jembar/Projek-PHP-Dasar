<?php
include("config.php");

// id query string
if(isset($_GET['id'])){
    header('loction: list-siswa.php');
}
    // ambil id
    $id = $_GET['id'];

    // query sql
    $sql = "SELECT * FROM tb_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);


    // jika data edit tidak di temukan
    if(mysqli_num_rows($query)) <1 ){
        die("data tidak ditemukan...");
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir edit siswa</title>
</head>
<body>
    <header>
        <h3>Formulir edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
     
        <p>
            <label for="nama">Nama</label>
            <input type="text" name="nama"  placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>"/>
        </p>

        <p>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" value="<?php echo $siswa['alamat'] ?>" ></textarea>
        </p>
    
    </fieldset>
    </form>
    
</body>
</html>