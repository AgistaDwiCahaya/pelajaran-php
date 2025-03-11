<h2>KELOMPOK Agista-Aura</h2>
<h2>Kasus 1</h2>
<?php
    $hari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    $tanggal = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
    $bulan =["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Ags","Spt","Okt","Nov","Des"];
    $tahun =[2024, 2025, 2026];
    
    //menampilkan hari menggunakan for
    for ($i = 0; $i < count ($hari); $i++) {
        if ($hari [$i] == "Senin"){
            echo $hari [$i] . "," . "\n";
            break;
        }
    }

    //Menampilkan tanggal menggunakan foreach
    foreach ($tanggal as $tgl) {
        if ($tgl == 10) {
            echo $tgl . " - " . "\n";
            break;
        }
    }

    //Menampilkan bulan menggunakan while
    $j = 0;
    while ($j < count ($bulan)) {
        if ($bulan [$j] == "Mar") {
            echo $bulan [$j] . " - " . "\n";
            break;
        }
        $j++;
    }

    //Menampilkan tahun menggunakan do-while
    $k = 0;
    do {
        if ($tahun [$k] == 2025) {
            echo $tahun [$k] . "\n";
            break;
        }
        $k++;
    } while ($k < count ($tahun));
?>

<h2>Kasus 2</h2>
<?php
    // Membuat array dari 30 hingga 1
    $anak_ayam = range(30, 1);

    //Looping menggunakan foreach untuk menampilkan lirik
    foreach($anak_ayam as $jumlah) {
        if ($jumlah > 1) {
            echo "Anak ayam turun " . $jumlah . ", mati satu tinggal " . ($jumlah-1) . ".<br> \n";
        } else {
            echo "Anak ayam turun 1, mati 1 tinggal induknya.\n";
        }
    }
?>

<h2>Kasus 3</h2>
<?php
    // Mawar yang dimiliki Sholeh
    $mawar_dimiliki = [];

    for ($mawar = 21; $mawar >= 10; $mawar--) {
        $mawar_dimiliki[] = $mawar;
    }

    echo "Mawar yang dimiliki Sholeh: " . implode(", ", $mawar_dimiliki) . "<br> \n";
    echo "Jumlah: " . count($mawar_dimiliki) . "<br>\n\n";

    // Mawar yang diberikan ke ibu
    $mawar_ibu = [];

    for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
        $mawar_ibu[] = $mawar;
    }

    echo "<br> Mawar yang diberikan ke ibu: " . implode(", ", $mawar_ibu) . "<br> \n";
    echo "Jumlah: " . count($mawar_ibu) . "<br>\n\n";

    // Sisa mawar yang dimiliki Sholehah
    $mawar_sholehah = array_diff($mawar_dimiliki, $mawar_ibu);

    echo "<br> Mawar yang diberikan ke Sholehah: " . implode(", ", $mawar_sholehah) . "<br>\n";
    echo "Jumlah: " . count($mawar_sholehah) . "<br>\n";
?>

<h2>Kasus 4</h2>
<?php
    // Array berisi suasana hati dan lagu yang sesuai
    $playlist = [
        "galau" => ["Mesin Waktu - Budi Doremi"],
        "bersemangat" => ["Selamat Pagi - Ran"],
        "marah" => ["Yang Patah Tumbuh, Yang Hilang Berganti - Banda Neira"]
    ];

    // Suasana hati Ambyar (ubah sesuai kebutuhan)
    $suasanaHati = ["galau"];

    // Menampilkan playlist berdasarkan suasana hati tanpa percabangan
    foreach ($suasanaHati as $hati) {
        foreach ($playlist[$hati] as $lagu) {
            echo "Saat $hati, Ambyar mendengarkan lagu: $lagu <br>";
        }
    }
?>