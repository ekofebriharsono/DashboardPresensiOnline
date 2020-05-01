<?php
include 'koneksi.php';

@$id_presensi = $_POST['id_presensi'];

if (isset($_POST['terima'])){
  //Cek npm sudah terdaftar apa belum
  $sql = "UPDATE presensi SET hadir_luar_kota = '1'  WHERE id_presensi='$id_presensi'";
  $results = mysqli_query($con,$sql);
   if($results) {
   header('Location: ../request_luar_kota.php');

 } else {
   $response["value"] = 0;
   $response["message"] = $sql;
   echo json_encode($response);
 }
} else if (isset($_POST['tolak'])){
   //Cek npm sudah terdaftar apa belum
   $sql = "DELETE FROM presensi  WHERE id_presensi='$id_presensi'";
   $results = mysqli_query($con,$sql);
    if($results) {
    header('Location: ../request_luar_kota.php');
 
  } else {
    $response["value"] = 0;
    $response["message"] = "Gagal";
    echo json_encode($response);
  }
}

?>