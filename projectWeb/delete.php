<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="library/style/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    $berkas = "data/data.json";
    // mengambil file json
    $dataJson = file_get_contents($berkas);
    // menjadikan file json menjadi array
    $datasewa = json_decode($dataJson, true);

    $datahapus = $_POST['delete'];


    foreach ($datasewa as $data){
        for($i=0;$i<count($data);$i++){
            if ($data[$i] === $datahapus) {
                array_splice($datasewa, $i, 1);
                $jsonfile = json_encode($datasewa, JSON_PRETTY_PRINT);
                $anggota = file_put_contents($berkas, $jsonfile);

            }
        }
    }
    ?>
    <div class="container">
        <div class="tex-center">
            <h1 class="tex-center">DATA BERHASIL DIHAPUS</h1>
            <a href="index.php"><button class="btn btn-primary tex-center">KEMBALI KE HOME</button></a>
        </div>
    </div>
    <script src="library/js/bootstrap.min.js"></script>

</body>

</html>