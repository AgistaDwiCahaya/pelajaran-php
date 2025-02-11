<html>

<head>
    <title>
        belajar php sama bu nita
    </title>
    <style>
        .abang{
            color: red;
        }
    </style>
</head>

<body>
        Hallo 
        <?php
        $walkes = "Bu Yuniar";
        echo "<br> agista";
        echo '<br> aku kuliah di undip';
        echo "<div class='abang'> wali kelas: ". $walkes ." </div>";
        //komentar satu baris
        #ini juga komentar satu baris
        /* ini komentar 
        berbari 
        baris*/
    echo " $walkes ";
    $angka1 = 5;
    $angka2 = 10;
    $penjumlahan = $angka1 + $angka2;
    $x = $angka1 * $angka2;

    echo "<br>  $angka1 + $angka2 = ". $penjumlahan; //ini untuk code hasil diluar
    echo "<br>  $angka1 + $angka2 = $penjumlahan "; //ini untuk code hasil didalam
    echo "<br>"; //br untuk tidak disamping tetapi dibawah
    echo $x ." = $angka1 x $angka2";
    echo "<br> $angka1 x $angka2 = $x"; 
    echo "<br> $angka1<sup>$angka2</sup> = "; //sup untuk pangkatnya
    echo pow($angka1,$angka2); //pow untuk memperlihatkan hasil dari perpangkatan tersebut
    echo "<br> $angka2<sup>$angka1</sup> =";
    echo pow($angka2,$angka1);
    echo "<br> $angka1<sup>$angka2</sup> = "; 
    echo number_format(pow($angka1,$angka2), 0, '', '.');
    /*
    number_format(
        angkanya,
        jumlah angka di belakang koma,
        'tanda koma/titik paling belakang',
        tanda koma/titik di antaraangka')
    */

?>
</body>

</html>