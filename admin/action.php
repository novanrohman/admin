<?php
include '../config/connect.php';

if(isset($_POST['add'])){
    $name=$_POST['nama'];
    $kode=$_POST['kode'];
    $jumlah=$_POST['jumlah'];
    $deskripsi=$_POST['deskripsi'];

    $photo=$_FILES['image']['name'];
    $upload="../assets/img/".$photo;

    $query="INSERT INTO produk(nama,kode,kategori,jumlah,deskripsi,photo)VALUES(?,?,?,?,?,?)";
    $stmt=$koneksi->prepare($query);
    $stmt->bind_param("ssssss",$name,$kode,$jumlah,$deskripsi,$upload);
    $stmt->execute();
}
?>