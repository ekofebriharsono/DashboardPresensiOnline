<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $pin = md5($nip);

    if(isset($_POST['acp'])){
        $acp = 1;
    }else {
        $acp = 0;
    }

    $sql = "INSERT INTO user (nip,pin,nama_user,acp) VALUES($nip,'$pin','$nama',$acp)";
    $results = mysqli_query($con,$sql);
    if($results) {
      header('Location: ../input_data_karyawan.php?sukses=1');
    }else {
        header('Location: ../input_data_karyawan.php?gagal=1');
    }
}



?>