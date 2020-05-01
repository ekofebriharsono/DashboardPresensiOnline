<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once('koneksi.php');
   $response = array();
   //mendapatkan data
 

   @$id_user = $_POST['id_user'];
   
  if (isset($_POST['reset'])){
   
    //Cek npm sudah terdaftar apa belum
    $sql = "UPDATE user SET status_device = 0 , id_device='-', token='-'  WHERE id_user='$id_user'";
    $results = mysqli_query($con,$sql);
    if($results) {
     header('Location: ../data_karyawan.php');
      
    } else {
      $response["value"] = 0;
      $response["message"] = "asd";
      echo json_encode($response);
    }
 
    // tutup database
    mysqli_close($con);
  } else if (isset($_POST['delete'])){
 //Cek npm sudah terdaftar apa belum
 $sql = "DELETE FROM user WHERE id_user='$id_user'";
 $results = mysqli_query($con,$sql);
 if($results) {
  header('Location: ../data_karyawan.php');
   
 } else {
   $response["value"] = 0;
   $response["message"] = "asd";
   echo json_encode($response);
 }

 // tutup database
 mysqli_close($con);
  }
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagi!";
  echo json_encode($response);
}

?>