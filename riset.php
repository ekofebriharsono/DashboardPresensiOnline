<?php
include 'proses_php/koneksi.php';
$hasil = array();
                                    $data = mysqli_query($con,"SELECT * from user");
                                    while($d = mysqli_fetch_array($data)){
                                        array_push($hasil,$d['nama_user']);
                            
                                    }

                                      echo $hasil;

                                      print_r($hasil);


                                    ?>