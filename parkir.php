<?php
session_start();
include 'proses_php/koneksi.php';
$data = mysqli_query($con,"SELECT * from pendapatan");
$data1 = mysqli_query($con,"SELECT * from pendapatan");
$data2 = mysqli_query($con,"SELECT * from pendapatan");
$datawilayah1 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=1");
$datawilayah2 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=2");
$datawilayah3 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=3");
$datawilayah4 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=4");
$datawilayah5 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=5");
$datawilayah6 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=6");
$datawilayah7 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=7");
$datawilayah8 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=8");
$datawilayahterbesar1 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan desc  limit 5");
$datawilayahterkecil1 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan asc  limit 5");
$datawilayahterbesarall1 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan desc  limit 5");

$datawilayah11 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=1");
$datawilayah12 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=2");
$datawilayah13 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=3");
$datawilayah14 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=4");
$datawilayah15 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=5");
$datawilayah16 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=6");
$datawilayah17 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=7");
$datawilayah18 = mysqli_query($con,"SELECT * from wilayah_pendapatan where wilayah=8");
$datawilayahterbesar11 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan desc  limit 5");
$datawilayahterbesarall11 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan desc  limit 5");
$datawilayahterkecil11 = mysqli_query($con,"SELECT * from wilayah_pendapatan ORDER BY pendapatan asc  limit 5");
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
                        <h1>Grafik</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Grafik</a></li>
                            <li><a href="#">Parkir</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">Total Pendapatan</div>
                                    <div class="stat-digit">15,835,506,142</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDAPATAN LOKASI ON-LINE</div>
                                    <div class="stat-digit">15,835,506,142</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDAPATAN LOKASI OFF LINE</div>
                                    <div class="stat-digit">0</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDAPATAN KARCIS MANUAL</div>
                                    <div class="stat-digit">0</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">TIKET MASALAH</div>
                                    <div class="stat-digit">82,377,000</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDATAPAN MEMBER</div>
                                    <div class="stat-digit">293,228,000</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDAPATAN HELM</div>
                                    <div class="stat-digit">2,820,000</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                             <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                 <div class="stat-content dib">
                                    <div class="stat-text">PENDAPATAN SISTEM</div>
                                    <div class="stat-digit">15,625,414,042</div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan </h4>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Lima Lokasi Pendapatan Parkir (all categories) Terbesar Seluruh Wilayah</h4>
                                <canvas id="all categories"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Lima Lokasi Pendapatan Parkir (sistem) Terbesar Seluruh Wilayah</h4>
                                <canvas id="sistemTerbesar"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Lima Lokasi Pendapatan Parkir (sistem) Terkecil Seluruh Wilayah</h4>
                                <canvas id="sistemTerkecil"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 1</h4>
                                <canvas id="wilayah1"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 2</h4>
                                <canvas id="wilayah2"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 3</h4>
                                <canvas id="wilayah3"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 4</h4>
                                <canvas id="wilayah4"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 5</h4>
                                <canvas id="wilayah5"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 6</h4>
                                <canvas id="wilayah6"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 7</h4>
                                <canvas id="wilayah7"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 8</h4>
                                <canvas id="wilayah8"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 9</h4>
                                <canvas id="wilayah9"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 10</h4>
                                <canvas id="wilayah10"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <!-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pendapatan Parkir Wilayah 11</h4>
                                <canvas id="wilayah11"></canvas>
                            </div>
                        </div>
                    </div>/# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pend Member Seluruh Wilayah</h4>
                                <canvas id="PendMemberSeluruhWilayah"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Proporsi Cara dan Alat Bayar</h4>
                                <canvas id="ProporsiCaradanAlatBayar"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Volume Kendaraan</h4>
                                <canvas id="VolumeKendaraan"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Rasio Pendapatan Per Kendaraan</h4>
                                <canvas id="RasioPendapatanPerKendaraan"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->







                </div>

            </div><!-- .animated -->
        </div><!-- .content -->

       
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!--  Chart js -->
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <!-- <script src="assets/js/init-scripts/chart-js/chartjs-init.js"></script> -->

    <script>

         //bar chart
    var ctx = document.getElementById( "VolumeKendaraan" );
        ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Parkir 0 s/d 1 jam", "Parkir 1 s/d 2 jam", "Parkir 2 s/d 3 jam", "Parkir 11 s/d 12 jam", "Parkir 12 s/d 13 jam" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 65, 59, 80, 81, 56 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            },
                {
                    label: "My Second dataset",
                    data: [ 28, 48, 40, 19, 86 ],
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,0,0,0.07)"
                            },
                            {
                    label: "My First dataset",
                    data: [ 65, 59, 80, 81, 56 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );


    //pie chart
    var ctx = document.getElementById( "PendMemberSeluruhWilayah" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ 12302600, 13221600, 40533300, 29481300, 14316900 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0, 123, 255,0.6)",
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0, 123, 255,0.6)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "Bandung Utara",
                            "Purwosari",
                            "Gambir",
                            "Yogyakarta Selatan",
                            "Semarang Tawang"
                        ]
        },
        options: {
            responsive: true
        }
    } );

      //pie chart
      var ctx = document.getElementById( "ProporsiCaradanAlatBayar" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ 8725568364, 2702498005, 1094102001, 126795000, 2907421009 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0, 123, 255,0.6)",
                                    "rgba(0, 123, 255,0.8)",
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0, 123, 255,0.6)",
                                    "rgba(0, 123, 255,0.8)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "cash",
                            "mdr",
                            "bca",
                            "bni",
                            "kci",

                        ]
        },
        options: {
            responsive: true
        }
    } );


    //line chart
    var ctx = document.getElementById( "lineChart" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($data)) { echo '"' . $d['tgl_pendapatan'] . '",';}?>],
            datasets: [
                {
                    label: "Pendapatan Total",
                    borderColor: "rgba(245, 135, 0, 1)",
                    borderWidth: "2",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                   
                    data: [<?php while ($s = mysqli_fetch_array($data1)) { echo '"' . $s['pend_total'] . '",';}?>]
                            },
                {
                    label: "Pendapatan Bersih",
                    borderColor: "rgba(3, 199, 0, 1)",
                    borderWidth: "2",
                   
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [<?php while ($a = mysqli_fetch_array($data2)) { echo '"' . $a['pend_bersih'] . '",';}?>]
                            }
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );


     // single bar chart
     var ctx = document.getElementById( "RasioPendapatanPerKendaraan" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Mobil", "Motor"],
            datasets: [
                {
                    label: "Rata - rata",
                    data: [ 6171, 5639, ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    // single bar chart
    var ctx = document.getElementById( "all categories" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayahterbesarall1)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "All Category",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayahterbesarall11)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "sistemTerbesar" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayahterbesar1)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Terbesar",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayahterbesar11)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "sistemTerkecil" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ <?php while ($d = mysqli_fetch_array($datawilayahterkecil1)) { echo '"' . $d['nama'] . '",';}?> ],
            datasets: [
                {
                    label: "Terkecil",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayahterkecil11)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah1" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah1)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 1",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah11)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah2" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah2)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 2",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah12)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah3" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah3)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 3",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah13)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah4" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah4)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 4",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah14)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah5" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah5)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 5",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah15)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah6" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah6)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 6",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah16)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah7" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah7)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 7",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah17)) { echo '"' . $d['pendapatan'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah8" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($datawilayah8)) { echo '"' . $d['nama'] . '",';}?>],
            datasets: [
                {
                    label: "Wilayah 8",
                    data: [<?php while ($d = mysqli_fetch_array($datawilayah18)) { echo '"' . $d['pendapatan'] . '",';}?> ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah9" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 40, 55, 75, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah10" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 40, 55, 75, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "wilayah11" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 40, 55, 75, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );



    </script>
   
    

</body>

</html>