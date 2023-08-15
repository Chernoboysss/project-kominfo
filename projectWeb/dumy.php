<?php
// date_default_timezone_set('Asia/Jakarta');
// $waktu_awal =strtotime("12:00");
// $waktu_akhir =strtotime(date("h:i:sa")); // bisa juga waktu sekarang now()

// //menghitung selisih dengan hasil detik
// $diff=$waktu_akhir - $waktu_awal;
// echo "$waktu_akhir - $waktu_awal <br>";
// echo "$diff <br>";
// //membagi detik menjadi jam
// $jam=floor($diff / (60 * 60));
// echo "$jam <br>";

// //membagi sisa detik setelah dikurangi $jam menjadi menit
// $menit =$diff - $jam * (60 * 60);

// //menampilkan / print hasil
// echo 'Sehingga Anda memiliki sisa waktu promosi selama: ' . $jam .  ' jam dan ' . floor( $menit / 60 ) . ' menit';

date_default_timezone_set('Asia/Jakarta');
$jamSewa = array();
$jamSekarang = date("G");
array_push($jamSewa,$jamSekarang);

function waktu($jam,$durasi){

    global $jamSekarang;
    
    if ($jam + $durasi == $jamSekarang || $jam + $durasi <= $jamSekarang){
        return "<P>WAKTU SEWA HABIS</p>";
    }else{
        $selisihJam = $jam - $durasi;
        $sisaJam = $jamSekarang - $selisihJam;
        return "sisa $sisaJam Jam";
    }
}

$durasi = 2;
echo waktu($jamSewa[0],$durasi);



// $data = [2,3];
// var_dump($data);
// echo"</br>";
// array_push($data,23);
// var_dump($data);
?>