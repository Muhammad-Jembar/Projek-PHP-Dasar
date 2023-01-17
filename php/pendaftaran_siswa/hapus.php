<?php
include("config.php");

if(isset($_GET['id'])){

    // mengambil id 
    $id = $_GET['id'];

    
    //hapus data
    $sql = "DELETE FROM tb_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);


    // apakah menghapus data berhasil?

    if( $query ){
        header('Location: list-siswa.php');

    } else {
        die('gagal menghapus');
    }

 
 } else {
   die("akses di larang");
 }

?>