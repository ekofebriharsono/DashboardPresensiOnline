<?php
session_start();
include 'proses_php/koneksi.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developer Damartana</title>
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
                        <h1>Input New Aplication</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Input New Aplication</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <?php 
                 
                 $no = 1;
                     $data = mysqli_query($con,"SELECT * FROM versi_damartana ORDER BY id_versi DESC LIMIT 1
                     ");
                     while($d = mysqli_fetch_array($data)){
                 ?>

                   <div class="col-md-6 col-lg-3">
                           <div class="card">
                               <div class="p-0 clearfix">
                                   <i class="fa fa-cogs bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                   <div class="h5 text-primary mb-0 pt-3"><?php echo $d['last_update']; ?></div>
                                   <div class="text-muted text-uppercase font-weight-bold font-xs small">Last Update</div>
                               </div>
                           </div>
                       </div>

                       <div class="col-md-6 col-lg-3">
                           <div class="card">
                               <div class="p-0 clearfix">
                                   <i class="fa fa-cogs bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                   <div class="h5 text-primary mb-0 pt-3"><?php echo $d['last_version']; ?></div>
                                   <div class="text-muted text-uppercase font-weight-bold font-xs small">Last Version</div>
                               </div>
                           </div>
                       </div>

           <?php 
       }
       ?>

                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">Form New Aplication</div>
                                                        <div class="card-body card-block">
                                                            <form action="proses_php/proses_versi.php" method="POST">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="date" id="last_update" name="last_update" placeholder="Last update" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                        <input type="text" id="last_version" name="last_version" placeholder="Last Version" class="form-control">
                                                                    </div>
                                                                </div>
                                                                     
                                                              
                                                                <div class="form-actions form-group"><button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button></div>
                                                            </form>
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
