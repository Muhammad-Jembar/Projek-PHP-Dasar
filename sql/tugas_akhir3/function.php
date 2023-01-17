<?php

 $db = mysqli_connect("localhost", "root", "", "pendaftaran_siswa");



  function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $nama = mysqli_fetch_assoc($result) ) {
      $rows[] = $nama;
    }
    return $rows;
  
   }



   function tambah($data) {
    global $db;

    $nis = htmlspecialchars($data["nis"]); 
    $nama = htmlspecialchars($data["nama"]); 
    $jk = htmlspecialchars($data["jenis_kelamin"]); 
    $alamat = htmlspecialchars($data["alamat"]); 
 

    // query insert

    $query = "INSERT INTO tb_siswa 
               VALUES
               ('', '$nis', '$nama', '$jk', '$alamat')
          
    
    ";

     mysqli_query($db, $query);

     return mysqli_affected_rows($db);
 
    }
 
    function ubah($data)
   
   function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE * FROM tb_siswa WHERE id = $id");

    return mysqli_affected_rows($db);
   }
    
   
 function cari($keyword) {
    $query = "SELECT * FROM tb_siswa WHERE nis = '%keyword%'";

    return query($query);
 }


?>