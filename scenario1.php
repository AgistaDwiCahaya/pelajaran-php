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
<h3>Jadwal Harian Andi</h3>
<p>
    Siang & Sore:
    <br>15:30 - 15:45 → Pulang sekolah (sudah sampai rumah)
    <br>15:45 - 16:00 → Mandi
    <br>16:00 - 16:30 → Mengaji 30 menit
    <br>16:30 - 17:30 → Mengerjakan tugas 1 jam (jika ada tugas) / Waktu luang (main HP, istirahat) (jika tidak ada tugas, waktu berikutnya maju)
    <br>17:30 - 18:00 → Chatting dengan Raya
    <br>18:00 - 18:10 → Sholat Maghrib
    <br>18:10 - 18:20 → Membeli bumbu
    <br>18:20 - 18:30 → Waktu luang sambil menunggu ibu memasak
    <br>18:30 - 19:00 → Makan malam
    <br>19:00 - 19:10 → Sholat Isya
    <br>19:10 - 19:40 → Menghafal dialog untuk festival (jika ada tugas) / Kegiatan santai atau membantu orang tua (jika tidak ada tugas) <br>
    <br>Malam:
    <br>19:40 - 20:40 → Melanjutkan mengerjakan tugas (jika ada tugas) / Waktu luang (main HP, baca buku, atau istirahat) (jika tidak ada tugas, waktu berikutnya maju)
    <br>20:40 - 21:10 → Mengobrol dengan keluarga
    <br>21:10 - 22:00 → Waktu luang (Tiktok-an, persiapan tidur)
    <br>22:00 - 04:00 → Tidur <br>
    <br>Pagi:
    <br>04:00 → Bangun tidur
    <br>04:10 → Sholat Subuh
    <br>04:10 - 06:30 → Persiapan sekolah (mandi, sarapan, dll)
    <br>07:00 → Berangkat sekolah
    <br>07:00 - 15:30 → Sekolah <br>
    <br>Catatan:
    <br>Jika tidak ada tugas, kegiatan selanjutnya akan maju.
    <br>Waktu luang bisa digunakan untuk istirahat, bermain HP, atau membantu orang tua.
</p>
<?php
    $jam = date("17:35");

    $ada_tugas = true;

    if ($jam >= "15:30" && $jam < "15:45") {
        echo "Jam $jam, Andi dalam perjalanan pulang ke rumah.";
    } elseif ($jam >= "15:45" && $jam < "16:00") {
        echo "Jam $jam, Andi sedang mandi.";
    } elseif ($jam >= "16:00" && $jam < "16:30") {
        echo "Jam $jam, Andi sedang mengaji.";
    } elseif ($jam >= "16:30" && $jam < "17:30") {
        if ($ada_tugas) {
            echo "Jam $jam, Andi sedang mengerjakan tugas.";
        } else {
            echo "Jam $jam, Andi tidak punya tugas sekolah, jadi Andi memiliki waktu luang.";
        }
    } elseif ($jam >= "17:30" && $jam < "18:00") {
        if ($ada_tugas) {
            echo "Jam $jam, Andi chatting dengan Raya";
        } else {
            echo "Jam $jam, Andi membantu orang tua atau bersantai.";
        }
    } elseif ($jam >= "18:00" && $jam < "18:10") {
        echo "Jam $jam, Andi melaksanakan sholat maghrib.";
    } elseif ($jam >= "18:10" && $jam < "18:20") {
        echo "Jam $jam, Andi membeli bumbu dapur.";
    } elseif ($jam >= "18:20" && $jam < "18:30") {
        echo "Jam $jam, Andi memiliki waktu luang sembari menunggu ibu memasak.";
    } elseif ($jam >= "18:30" && $jam < "19:00") {
        echo "Jam $jam, Andi makan malam bersama keluarga.";
    } elseif ($jam >= "19:00" && $jam < "19:10") {
        echo "Jam $jam, Andi melaksanakan sholat isya.";
    } elseif ($jam >= "19:10" && $jam < "19:40") {
        echo "Jam $jam, Andi sedang menghafal dialog untuk festival.";
    } elseif ($jam >= "19:40" && $jam < "20:40") {
        if ($ada_tugas) {
            echo "Jam $jam, Andi melanjutkan mengerjakan tugas.";
        } else {
            echo "Jam $jam, Andi memiliki waktu luang (main HP, baca buku, atau istirahat).";
        }
    } elseif ($jam >= "20:40" && $jam < "21:10") {
        echo "Jam $jam, Andi mengobrol bersama keluarga.";
    } elseif ($jam >= "21:10" && $jam < "22:00") {
        echo "Jam $jam, Andi memiliki waktu luang untuk TikTok-an dan persiapan tidur.";
    } elseif ($jam >= "22:00" && $jam < "04:00") {
        echo "Jam $jam, Andi sedang tidur.";
    } elseif ($jam >= "04:00" && $jam < "04:10") {
        echo "Jam $jam, Andi bangun tidur.";
    } elseif ($jam >= "04:10" && $jam < "06:30") {
        echo "Jam $jam, Andi bersiap berangkat sekolah.";
    } elseif ($jam >= "06:30" && $jam < "07:00") {
        echo "Jam $jam, Andi dalam perjalanan ke sekolah.";
    } elseif ($jam >= "07:00" && $jam < "15:30") {
        echo "Jam $jam, Andi sedang sekolah.";
    } else {
        echo "Jam $jam, Andi mokad.";
    }
    ?>

<h2>Bahan Diskusi</h2>
<p>1. Apa yang perlu diperhatikan saat menentukan jadwal Andi sehingga tidak ada jadwal yang bertumpuk atau terlewat?</p>
<p>Jawab: Memperhatikan waktu yang sudah dialokasikan agar semua kegiatan selesai dengan efisien, tetap memiliki waktu bersama keluarga, dan mendapatkan istirahat yang cukup.</p>

<p>2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut?</p>
<p>Jawab: Karena sudah memperhitungkan waktu yang pas agar jadwal lebih efisien.</p>

<p>3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?</p>
<p>Jawab: Perbedaan waktu 4 jam lebih cepat di rumah Andi. Jika Andi chatting pukul 17:30, maka waktu lokal rumah Raya adalah 21:30.</p>

<p>4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?</p>
<p>Jawab: Andi memiliki waktu luang beberapa menit saat menunggu ibu memasak makan malam dan waktu persiapan tidur pada pukul 21:10 sampai 22:00.</p>

<p>5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?</p>
<p>Jawab: Tanpa tugas, Andi memiliki tambahan waktu luang 2 jam sehingga totalnya menjadi 3 jam.</p>