<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$nama_produk = $_POST['nama_produk'];
$harga       = $_POST['harga'];
$id_status       = $_POST['id_status'];
$id_kategori       = $_POST['id_kategori'];

//query insert data ke dalam database
$query = "INSERT INTO produk (nama_produk, harga, id_status, id_kategori) 
VALUES ('$nama_produk', '$harga','$id_status','$id_kategori')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}

?>