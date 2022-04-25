<?php
    if(isset($_POST['txJENIS'])){
    include_once ("koneksidb.php");
    $namaalat =$_POST['txALAT'];
    $kode = $_POST["txKODE"];
    $jumlah = $_POST["txJUMLAH"];
    $peminjaman = $_POST["dtWP"];
    $pengembalian = $_POST["dtWK"];

    $sql = "INSERT INTO stok(JENIS_BAJU,UKURAN,WARNA,HARGA,JUMLAH,WAKTU_RESTOK) Values('$namaalat','$kode','$jumlah','$peminjaman','$pengembalian');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Peminjaman Sukses<br>";
    }else{
        echo "Insert Data Pada Tabel Peminjaman Gagal<br>";
    }
}else{
    header("location : insertdatapinjam.php");
}

