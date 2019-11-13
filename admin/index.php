<?php
session_start();

if($_SESSION['status']!="login"){
    header("location:../login/index.php?pesan=belum_login");
}

echo "halaman admin";

?>