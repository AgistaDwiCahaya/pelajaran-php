<h2>Kelompok Agista-Aura</h2>
<h2>Scenario 1</h2>
<?php
    $nilai = 0;

    if ($nilai >= 90 && $nilai <= 100) {
        echo "<br> Nilai $nilai = A";
    } elseif ($nilai >= 80) {
        echo "<br> Nilai $nilai = B";
    } elseif ($nilai >= 70) {
        echo "<br> Nilai $nilai = C";
    } elseif ($nilai >= 0) {
        echo "<br> Nilai $nilai = D";
    } else {
        echo "<br> Nilai wajib di antara 0-100";
    }
?>

<h2>Scenario 2</h2>
<?php
    date_default_timezone_set('Asia/Jakarta');
    $pukul = date("H:i");

    if ($pukul >= "00:00" && $pukul < "04:00") {
        echo "<br> $pukul = Dini hari";
    } elseif ($pukul >= "04:00" && $pukul < "10:00") {
        echo "<br> $pukul = Pagi";
    } elseif ($pukul >= "10:00" && $pukul < "15:00") {
        echo "<br> $pukul = Siang";
    } elseif ($pukul >= "15:00" && $pukul < "17:30") {
        echo "<br> $pukul = Sore";
    } elseif ($pukul >= "17:30" && $pukul < "18:30") {
        echo "<br> $pukul = Petang";
    } elseif ($pukul >= "18:30" && $pukul <= "23:59") {
        echo "<br> $pukul = Malam";
    } else {
        echo "<br> Waktu tidak valid...";
    }
?>

<h2>Scenario 3</h2>
<h3>Jadwal Andi</h3>
<?php
    // Pulang sekolah : 15:30 - 15:45 (sudah sampai rumah)
    // Mandi 15:45-16:00
    // Mengaji 30 menit (16:00-16:30)
    // Mengerjakan tugas 1 jam (16:30-17:30)
    // Menghafal dialog untuk festival 30 menit (sampai sini jam sudah pukul 18:00)
    // Sholat mahgrib 10 menit (18.10)
    // Membeli bumbu 10 menit (18:20)
    // Waktu luang sambil menunggu ibu memasak 10 menit (18:30)
    // Makan malam antara jam 18:30-19:00
    // Sholat isya 10 menit (19:10)
    // Chatting dengan Raya 30 menit (19:40)
    // Melanjutkan mengerjakan tugas 1 jam (19:40-20:40)
    // Mengobrol dengan keluarga 30 menit (20:40-21:10)
    // 21:10-22:00 (waktu luang) tiktok an dan persiapan tidur
    // Andi tidur jam 22:00
    // Bangun 04:00
    // Sholat subuh 10 menit (04:10)
    // Persiapan sekolah 04:10-06:30 (mandi, sarapan, dll)
    // Berangkat sekolah 30 menit (07:00)
    // Sekolah 07:00-15:30
 
    $jam = date("15:30");

    if ($jam >= "15:30" && $jam < "15:45") {
        echo "<br>Jam $jam, Andi dalam perjalanan pulang ke rumah.";
    } elseif ($jam >= "15:45" && $jam < "16:00") {
        echo "<br>Jam $jam, Andi sedang mandi.";
    } elseif ($jam >= "16:00" && $jam < "16:30") {
        echo "<br>Jam $jam, Andi sedang mengaji.";
    } elseif ($jam >= "16:30" && $jam < "17:30") {
        echo "<br>Jam $jam, Andi sedang mengerjakan tugas.";
    } elseif ($jam >= "17:30" && $jam < "18:00") {
        echo "<br>Jam $jam, Andi menghafal dialog untuk festival.";
    } elseif ($jam >= "18:00" && $jam < "18:10") {
        echo "<br>Jam $jam, Andi melaksanakan sholat maghrib.";
    } elseif ($jam >= "18:10" && $jam < "18:20") {
        echo "<br>Jam $jam, Andi membeli bumbu dapur.";
    } elseif ($jam >= "18:20" && $jam < "18:30") {
        echo "<br>Jam $jam, Andi memiliki waktu luang sembari menunggu ibu memasak.";
    } elseif ($jam >= "18:30" && $jam < "19:00") {
        echo "<br>Jam $jam, Andi makan malam bersama keluarganya.";
    } elseif ($jam >= "19:00" && $jam < "19:10") {
        echo "<br>Jam $jam, Andi melaksanakan sholat isya.";
    } elseif ($jam >= "19:10" && $jam < "19:40") {
        echo "<br>Jam $jam, Andi chatting dengan Raya.";
    } elseif ($jam >= "19:40" && $jam < "20:40") {
        echo "<br>Jam $jam, Andi melanjutkan mengerjakan tugas.";
    } elseif ($jam >= "20:40" && $jam < "21:10") {
        echo "<br>Jam $jam, Andi mengobrol bersama keluarganya.";
    } elseif ($jam >= "21:10" && $jam < "22:00") {
        echo "<br>Jam $jam, Andi memiliki waktu luang untuk tiktokan dan persiapan tidur.";
    } elseif ($jam >= "22:00" && $jam < "04:00") {
        echo "<br>Jam $jam, Andi sedang tidur.";
    } elseif ($jam >= "04:00" && $jam < "04:10") {
        echo "<br>Jam $jam, Andi bangun tidur.";
    } elseif ($jam >= "04:10" && $jam < "06:30") {
        echo "<br>Jam $jam, Andi bersiap berangkat sekolah.";
    } elseif ($jam >= "06:30" && $jam < "07:00") {
        echo "<br>Jam $jam, Andi dalam perjalanan ke sekolah.";
    } elseif ($jam >= "07:00" && $jam < "15:30") {
        echo "<br>Jam $jam, Andi sedang sekolah.";
    } else {
        echo "<br> Andi mokad.";
    }
?>

<h2>Bahan Diskusi</h2>
<p>1. Apa yang perlu diperhatikan saat menentukan jadwal Andi sehingga tidak ada jadwal yang bertumpuk atau terlewat?</p>
<p>Jawab: Memperhatikan waktu yang sudah dialokasikan agar semua kegiatan selesai dengan efisien, tetap memiliki waktu bersama keluarga, dan mendapatkan istirahat yang cukup.</p>

<p>2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut?</p>
<p>Jawab: Karena sudah memperhitungkan waktu yang pas agar jadwal lebih efisien.</p>

<p>3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?</p>
<p>Jawab: Perbedaan waktu 4 jam lebih cepat di rumah Andi. Jika Andi chatting pukul 19:10, maka waktu lokal rumah Raya adalah 23:10.</p>

<p>4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?</p>
<p>Jawab: Andi memiliki waktu luang beberapa menit saat menunggu ibu memasak makan malam dan waktu persiapan tidur pada pukul 21:10 sampai 22:00.</p>

<p>5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?</p>
<p>Jawab: Tanpa tugas, Andi memiliki tambahan waktu luang 2 jam sehingga totalnya menjadi 3 jam.</p>