<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_status = $_POST['id_status'];
$nama_status     = $_POST['nama_status'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE status SET nama_status = '$nama_status' WHERE id_status = '$id_status'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>