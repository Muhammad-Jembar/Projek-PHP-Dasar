<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

// kembali menggunakan header
// kembali ke halaman login.php

header("Location: login.php");

?>