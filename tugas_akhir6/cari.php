<?php


include("config.php");



// Percobaan
// if( !isset($_POST['cari'])) {
   
//   // kembali ke list-siswa.php
//   // kembali menggunakan header
//   $keyword = $_POST['keyword'];

//   $sql = "SELECT * FROM tb_siswa WHERE nama '%$keyword%'";
//   $query = mysqli_query($db, $sql);
//   $siswa = mysqli_fetch_assoc($query);
  
//   header("Location: list-siswa.php");
// }
  
 // query sql

// mysqli_fetch_assoc
// penggulangan array dari list-siswa.php

// ambil id dari list-siswa.php





// jika data < 1
// menggunakan mysqli_num_rows
// kembali ke list-siswa.php
// tampilkan pesan/die


// menggunakan operator ternary
// untuk input type=radio (cheaked) 
// checked dan selected

 

// hidden = menyimpan id di list-siswa.php
// yang akan di update




// if( mysqli_num_rows( $query ) < 1 ) {
//   die("coba lagi");
// }



//  $db = mysqli_connect("localhost", "root", "", "siswa");


//   function query($query) {
//     global $db;
//     $result = mysqli_query($db, $sql);
//     $rows = [];
//     while ( $row = mysqli_fetch_assoc($result) ) {
//       $rows[] = $row;
//     }
    
//     return $rows;

//   }

  // mengambil keyword dari list-siswa.php

  // if( !isset($_POST['keyword'])) {
  
   // header("Location: list-siswa.php");
    

 // }


    // mengambil keyword

 
   
   // $sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%".$keyword."%";
   // $query = mysqli_query($db, $sql);
    // $siswa = mysqli_fetch_assoc($query);

  
 
   // query dan sql

   //$sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%".$keyword."%";
   //$query = mysqli_query($db, $sql);
   //$siswa = mysqli_fetch_assoc($query);

   // kembali ke halaman list-siswa.php
   // kembali menggunakan header

    

 




  // if( isset($_POST['cari'])) {

     // $nis    =  $_POST['nis'];
     // $nama   =  $_POST['nama'];
    // $jk     =  $_POST['jenis_kelamin'];
    // $alamat =  $_POST['alamat'];
    // $query = $_POST['keyword'];
     
   // header('Location: list-siswa.php');
  

   //function cari($keyword) {
      // menngguanakan mysqli_fecth_assoc
     // $sql = "SELECT * FROM tb_siswa WHERE nama = '$keyword'";
     // $query = mysqli_query($db, $sql);
     // $siswa = mysqli_fecth_assoc($query);
     // return $siswa($sql);
   
  

    // sql query 
    // menggunakan mysqli_fecth assoc
    // ambil id dari list-siswa.php
    // nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'"

   

  //  $sql = "SELECT * FROM tb_siswa WHERE nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'";
   // $query = mysqli_query($db, $sql);
   // $siswa = mysqli_fetch_assoc($query);
   
    // kembali ke halaman list-siswa.php
    // kembali menggunakan header
    // mysqli_num_rows

    // if (mysqli_num_rows( $query ) < 1 ) {
        // die("data gagal di temukan!");
    
    
   
    // if( $siswa ){
        // kembali ke halaman list-siswa.php
      //  header("Location: list-siswa.php");
    // } else {
    //    die("data gagal di temukan!");
    // }
     
      


   // } else {
    //    die("gagal di temukan");
  //  }
  

?>