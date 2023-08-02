<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Sepeda</title>
    <!-- pemanggilan css boostrap5 -->
    <link href="library/style/bootstrap.min.css" rel="stylesheet">
</head>

<style>
body {
    background-color: #fffae9;
}
</style>

<body>
    <!-- pembutana container agar sisi kiri dan kanan di perkecil -->
    <div class="container">
        <!-- membuat border di sepanjang conatiner -->
        <div class="border border-5 border-success pb-5" style="background-color: wheat;">
            <!-- berisi gambar -->
            <div class="text-center">
                <img src="img/banner.png" alt="" class="mb-5 img-fluid">
            </div>
            <!-- awal form -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <!-- table untuk merapihkan inputan user -->
                <table class="table table-borderless">
                    <tr>
                        <!-- input untuk nama pelanggan sewa -->
                        <td width="40%" class="text-center">
                            <p class="fw-bolder fs-5">Nama pelanggan sewa</p>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nama" placeholder="nama pelanggan sewa">
                        </td>
                    </tr>
                    <!-- input untuk durasi sewa -->
                    <tr>
                        <td>
                            <p class="fw-bolder fs-5 text-center" >Durasi sewa</p>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <!-- menggunakan select option untuk membuat pilihan durasi -->
                            <select class="form-select" name='durasi'>
                                <!-- looping untuk memberikan output 1 sampai 24 -->
                                <?php
                                    for($x == 1;$x <= 24;$x++){
                                        echo "<option value=$x>$x Jam</option> ";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <!-- membuat slider -->
                <div class="text-center">
                    <!-- header slider -->
                    <label class="mt-4 mb-5">
                        <p class = "fw-bolder fs-2">TYPE SEPEDA LISTRIK</p>
                    </label>
                    <!-- slider gambar -->
                    <div id="carouselExampleControls" class="carousel slide carousel-dark slide"
                    data-bs-ride="carousel">
                    <!-- slider 1 -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- gambar slider -->
                                <img src="img/gambar1.png" class="w-25" alt="..">
                                <!-- teks slider  -->
                                <div class="text-center">
                                    <div class="d-grid gap-2 col-4 mx-auto mt-5 ">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"data-bs-target="#modal1">INFORMASI TYPE 1</button>
                                    </div>                                   
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal1" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <!-- header untuk moda; -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Informasi Type</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <!-- isi modal -->
                                            <div class="modal-body">
                                                <!-- table untuk merapihkan -->
                                                <table class="table">
                                                    <tr>
                                                        <!-- gambar -->
                                                        <td><img src="img/gambar1.png" alt="" width="50%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <!-- list informasi sepeda -->
                                                            <ol style="list-style-type:none;">
                                                                <li>Dimensi P 140cm x T 100cm x L 60cm</li>
                                                                <li>Beban maksimal 100 kg</li>
                                                                <li>Ban R 10 (tubeless)</li>
                                                                <li>Motor 350 Watt</li>
                                                                <li>Kecepatan maksimal 30 Km/Jam</li>
                                                            </ol>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <!-- harga per jam -->
                                                            <td>Harga per jam = 3000</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <!-- button close modal -->
                                                    <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                                    <!-- button untuk pilih type sepeda -->
                                                    <input type="radio" class="btn-check" name="type" id="option1" value="type1">
                                                    <label class="btn btn-success" for="option1">SEWA</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider 2 -->
                            <div class="carousel-item">
                                <img src="img/gambar2.png" class="w-25" alt="..">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <div class="d-grid gap-2 col-4 mx-auto mt-5 ">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"data-bs-target="#modal2">INFORMASI TYPE 2</button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Informasi Type</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <tr>
                                                            <td><img src="img/gambar2.png" alt="" width="50%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ol style="list-style-type:none;">
                                                                    <li>Dimensi P 140cm x T 100cm x L 60cm</li>
                                                                    <li>Beban maksimal 100 kg</li>
                                                                    <li>Ban R 10 (tubeless)</li>
                                                                    <li>Motor 350 Watt</li>
                                                                    <li>Kecepatan maksimal 35 Km/Jam</li>
                                                                </ol>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Harga per jam = 3500
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                    <input type="radio" class="btn-check" name="type" id="option2" value="type2">
                                                    <label class="btn btn-success" for="option2">SEWA</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider 3 -->
                            <div class="carousel-item">
                                <img src="img/gambar3.png" class="w-25" alt="..">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <div class="d-grid gap-2 col-4 mx-auto mt-5 ">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"data-bs-target="#modal3">INFORMASI TYPE 3</button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modal3" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Informasi Type</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <td><img src="img/gambar3.png" alt="" width="50%"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ol style="list-style-type:none;">
                                                            <li>Dimensi P 140cm x T 100cm x L 60cm</li>
                                                            <li>Beban maksimal 100 kg</li>
                                                            <li>Ban R 10 (tubeless)</li>
                                                            <li>Motor 350 Watt</li>
                                                            <li>Kecepatan maksimal 40 Km/Jam</li>
                                                        </ol>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Harga per jam = 4000
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                            <input type="radio" class="btn-check" name="type" id="option3" value="type3">
                                            <label class="btn btn-success" for="option3">SEWA</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- button untuk mentrigger slider ke kiri dan ke kanan -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
        </div>
    </div>

    <!-- button untuk memsubmit input user -->
    <div class="d-grid gap-2 col-2 mx-auto mt-5">
        <button type="submit" value="submit" name="submit" class="btn btn-success ">SEWA</button>
    </div>    
</form>
<!-- tutup border -->
</div>

<!-- daftar Sewa -->
<div class="text-center">
    <label class="mt-5 ">
        <p class = "fw-bolder fs-2">DAFTAR SEWA SEPEDA</p>
    </label>
</div>
<!-- table output input user -->
    <table class="table table-warning table-hover text-center mt-5">    
        <!-- header table -->
    <thead>
        <tr>
            <th scope="col">GAMBAR</th>
            <th scope="col">NAMA PELANGGAN</th>
            <th scope="col">JAM SEWA</th>
            <th scope="col">TYPE</th>
            <th scope="col">HARGA</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // <!-- function untuk mengeluarkan gambar -->
            function gambar($tipe){
                if ($tipe == "type1"){
                    $gambar = "<img src='img/gambar1.png' width='50px'>";
                    return $gambar ;
                }elseif($tipe == "type2"){
                    $gambar ="<img src='img/gambar2.png'width='50px'";
                    return $gambar ;
                }elseif($tipe == "type3"){
                    $gambar ="<img src='img/gambar3.png'width='50px'";
                    return $gambar ;
                }
            }
            // function untuk mengetahui harga sewa
                function hargaSewa($harga,$jamsewa){
                    return $harga * $jamsewa;
                }

            // inisialisasi file json
            $berkas = "data/data.json";
            // mengambil file json
            $dataJson = file_get_contents($berkas);
            // menjadikan file json menjadi array
            $datasewa = json_decode($dataJson, true);
           
            // jika tombol submit di klik
            if (isset($_POST['submit'])){ 
                $nama = $_POST['nama'];
                $tipe = $_POST['type'];
                $jam = $_POST['durasi'];
            // mengeluarkan harga sewa
                if ($tipe == "type1"){
                    $harga1 = 3000 ;
                    $harga = hargaSewa($harga1,$jam);
                }elseif($tipe == "type2"){
                    $harga2 = 3500 ;
                    $harga = hargaSewa($harga2,$jam);
                }elseif($tipe == "type3"){
                    $harga3 = 4000 ;
                    $harga = hargaSewa($harga3,$jam);
                }

                // input dara ke dalam json
                $data = [$nama,$jam,$tipe,$harga];
                array_push($datasewa,$data) ;
                array_multisort($data,SORT_ASC);
                $dataJson = json_encode($datasewa, JSON_PRETTY_PRINT);
                file_put_contents($berkas, $dataJson);
                
                // output data dengan table
                for($i=0; $i<count($datasewa); $i++){
                    echo "<tr>";
                    echo "<td>".gambar($datasewa[$i][2])."</td>";
                    echo "<td>".$datasewa[$i][0]."</td>";
                    echo "<td>".$datasewa[$i][1]."</td>";
                    echo "<td>".$datasewa[$i][2]."</td>";
                    echo "<td>".$datasewa[$i][3]."</td>";
                    echo "</tr>";
                }            
                echo "<tr>";
                echo "<td colspan='5'><h4>Total unit yang di pinjam ". count($datasewa)."</h4></td>";
                echo "</tr>";
            }
            ?>
<!-- javascript boostrap -->
<script src="library/js/bootstrap.min.js"></script>
</body>

</html>