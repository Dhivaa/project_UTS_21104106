<?php
    include_once ("koneksidb.php");
    $namaalat ="kamera sony a6000";
    $kode = "xlmpdd";
    $jumlah = "3";
    $peminjaman = "2022-12-12";
    $pengembalian = "2022-15-12";

    $sql = "INSERT INTO peminjaman(NAMA_ALAT,KODE,JUMLAH,TGL_PEMINJAMAN,TGL_PENGEMBALIAN) Values('$namaalat','$kode','$jumlah','$peminjaman','$pengembalian');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Sukses<br>";
    }else{
        echo "inser Data Pada Tabel Gagal<br>";
    }
