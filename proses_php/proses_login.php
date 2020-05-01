<?php

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$pin = md5($_POST['pin']);

$data = mysqli_query($con,"select * from user where nip='$nip' and pin='$pin' and acp=1");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    while($row = mysqli_fetch_array($data)){
    $_SESSION['nip'] = $nip;
    $_SESSION['status'] = "login";
    $_SESSION['nama_user'] = $row['nama_user'];
    header("location:../index.php");
    }
}else{
	header("location:../login.php?pesan=gagal");
}



?>