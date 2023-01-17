<?php

  include("config.php");

  if(isset($_POST['cari'])) {

     // $nis    =  $_POST['nis'];
     // $nama   =  $_POST['nama'];
    // $jk     =  $_POST['jenis_kelamin'];
    // $alamat =  $_POST['alamat'];
    $query = $_POST['keyword'];
     
   

  

    // sql query 
    // menggunakan mysqli_fecth assoc
    // ambil id dari list-siswa.php
    // nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'"

   

    $sql = "SELECT * FROM tb_siswa WHERE nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
   
    // kembali ke halaman list-siswa.php
    // kembali menggunakan header
    // mysqli_num_rows

    // if (mysqli_num_rows( $query ) < 1 ) {
        // die("data gagal di temukan!");
    
    
   
     if( $siswa ){
        // kembali ke halaman list-siswa.php
        header("Location: list-siswa.php");
     } else {
        die("data gagal di temukan!");
     }
     
      


    } else {
        die("gagal di temukan");
    }
  

?>