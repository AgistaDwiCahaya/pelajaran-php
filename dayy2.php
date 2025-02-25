<?php
    // jika senin - selasa - rabu maka, mengenakan seragam osis
    // jika kamis, mengenakan seragam batik
    // jika jumat, mengenakan seragam olahraga
    // jika sabtu, mengenakan seragam pramuka

    $hari = "minggu";

    if($hari == "senin" || $hari == "selasa" || $hari == "rabu")
    {
        echo"$hari mengenakan seragam osis";
    }
    elseif($hari == "kamis")
    {
        echo"$hari mengenakan seragam batik";
    }
    elseif($hari == "jumat")
    {
        echo"$hari mengenakan seragam olahraga";
    }
    elseif($hari == "sabtu")
    {
        echo"$hari mengenakan seragam pramuka";
    }
    else
    {
        echo"$hari libur boss...";
    }

    $jam = date("07:00"); //jam sekarang
    $jam > date("10:00"); //lebih dari jam 10
    $jam < date("08:00"); //kurang dari jam 8

    if($jam > date("10:00"))
    {
        echo"<br> $jam terlambat";
    }
    elseif($jam < date("08:00"))
    {
        echo"<br> $jam tepat waktu";
    }
    else
    {
        echo"<br> $jam tidak tepat waktu";
    }

?>