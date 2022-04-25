<?php
    
    include_once("koneksidb.php");
    $namaalat = "kamera canon";
    $sql = "DELETE FROM peminjaman WHERE nama_alat='$namaalat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Penghapusan Data Sukses<br>";
    }else{
        echo "Proses Penghapusan Data Sukses";
    }