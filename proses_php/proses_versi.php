<?php

 //header('Location: info_aplikasi.php');

if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
 
   @$last_version = $_POST['last_version'];
   @$last_update = $_POST['last_update'];
   
   require_once('koneksi.php');
   //Cek npm sudah terdaftar apa belum
  
     $sql = "INSERT INTO versi_damartana (last_version,last_update,link) VALUES('$last_version','$last_update','http://api.damartana.com/apk/app-debug.apk')";
     $results = mysqli_query($con,$sql);
     if($results) {
        header('Location: ../update_aplikasi.php');
      
      // echo json_encode($response);
       
     } else {
       $response["value"] = 0;
       $response["message"] = "asd";
       echo json_encode($response);
     }
   
   // tutup database
   mysqli_close($con);
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagi!";
  echo json_encode($response);
}

?>