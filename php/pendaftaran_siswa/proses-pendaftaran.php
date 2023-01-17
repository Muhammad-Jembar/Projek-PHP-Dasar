<?php
include("config.php");


// apakah tombol daftar sudah di klik atau belum? 

if(isset($_POST['daftar'])){

    //ambil data dari formulir

   
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // tambah query
    $sql = "INSERT INTO tb_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
    
    
    if( $query ){
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
    

} else {

    die("Akses di larang...");
}
?>