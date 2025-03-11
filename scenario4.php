<?php 
    // array indeks
    $buah = ["Apel", "Mangga", "Pisang"];
    echo $buah[0];

    // array asosiatif
    $harga = ["Apel" => 5000, "Mangga" => 7000, "Pisang" => 3000];
    echo "<br> $harga[Pisang] <br>";

    // array multidimensi
    $produk = [
        ["Laptop", 100000],
        ["Mouse", 15000]
    ];
    echo $produk[1][1];
?>