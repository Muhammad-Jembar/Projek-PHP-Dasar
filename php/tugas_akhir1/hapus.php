<?php 

include("config.php");

// mengambil id dari list-siswa.php

 $id = $_GET['id'];

 
 // query dan sql

 $sql = "DELETE FROM tb_siswa id=$id";
 $query = mysqli_query($db, $sql);

 // kembali ke halaman list-siswa.php
 // kembali menggunakan header

 if( $query ){
     header('Location: list-siswa.php');

 } else {
    die("gagal kembali ke halaman");
 }

 


?>