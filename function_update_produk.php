<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_produk = $_POST['id_produk'];
$nama_produk     = $_POST['nama_produk'];
$harga         = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];
$id_status       = $_POST['id_status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET nama_produk = 
'$nama_produk', harga = '$harga', id_kategori = '$id_kategori' WHERE id_produk = '$id_produk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>