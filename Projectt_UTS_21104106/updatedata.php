<?php

    include_once("koneksidb.php");
    $namaalat = "kamera sony a6000";
    $kode = "xlmpdd";
    $sql = "UPDATE peminjaman SET KODE='$kode' WHERE nama_alat='$namaalat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Pembaruan Data Sukses<br>";
    }else{
        echo "Proses Pembaruan Data Sukses";
    }