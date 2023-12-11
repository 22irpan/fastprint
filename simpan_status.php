<?php

//include koneksi database
include('koneksi.php');

//get data dari form


$id_status       = $_POST['id_status'];
$nama_status       = $_POST['nama_status'];

//query insert data ke dalam database
$query = "INSERT INTO status (id_status, nama_status) VALUES ('$id_status', '$nama_status')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>