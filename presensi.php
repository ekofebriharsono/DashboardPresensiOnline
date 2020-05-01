<?php
session_start();
include 'proses_php/koneksi.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Damartana</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

  <?php include('sidebar.php') ?>

    <div id="right-panel" class="right-panel">

    <?php include('header.php') ?>
    
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Presensi Hari ini (<?php echo date('Y-m-d'); ?>)</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Presensi Karyawan</a></li>
                            <li><a href="#">Presensi</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <form role="form" action="presensi.php" method="GET">
                                <input type="date" class="btn btn-outline-primary" name="date"/>
                                <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                                </form>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Shif</th>
                                            <th>Hadir</th>
                                            <th>Pulang</th>
                                            <th>Jam Kerja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       if (isset($_GET['date'])){
                                        $date = $_GET['date'];
                                      } else {
                                        $date = date('Y-m-d');
                                     
                                      }
                                        
                                         $data = mysqli_query($con,"select shift,imei,hadir,pulang,nama_user,waktu,waktu_pulang,hadir_luar_kota, pulang_luar_kota from presensi inner join user using (id_user) where tanggal = '$date'");
                                         while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $d['nama_user']; ?></td>
                                            <td><?php echo $d['shift']; ?></td>
                                            <td>
                                                    <?php 

                  if ($d['hadir_luar_kota'] == '0'){
                   
                      echo '<img src="images/iconcheckfalse.svg" alt="">';
                      echo $d['waktu'];
                    
                  } else {
                    if ($d['hadir'] == '0'){
                      echo '<img src="images/iconcheckfalse.svg" alt="">';
                    } else {
                      echo '<img src="images/iconchecktrue.svg" alt="">';
                      echo $d['waktu'];
                    }
                  }
                  
                 
                  ?>
                                            </td>
                                            <td>
                                            <?php 
                  if ($d['pulang_luar_kota'] == '0'){
                    echo '<img src="images/iconcheckfalse.svg" alt="">';
                      echo $d['waktu_pulang'];
                  } else {
                    if ($d['pulang'] == '0'){
                      echo '<img src="images/iconcheckfalse.svg" alt="">';
                    } 
                     else {
                      echo '<img src="images/iconchecktrue.svg" alt="">';
                      echo $d['waktu_pulang'];
                    }
                  }
                  
                  
                  ?>

                                            </td>
                                            <td>
                                                <?php

                  if($d['waktu_pulang'] != "-"){
                    $awal  = strtotime($d['waktu']);
                    $akhir = strtotime($d['waktu_pulang']);
                    $diff  = $akhir - $awal;

                    $jam   = floor($diff / (60 * 60));
                    $menit = $diff - $jam * (60 * 60);
                    echo $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';
                  } else {
                    echo 'Belum presensi pulang!';
                  }
                    
                  ?>
                                            </td>
                                        </tr>
                                         <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>
