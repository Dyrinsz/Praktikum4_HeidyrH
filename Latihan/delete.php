<?php
include "koneksi.php";

if(isset($_GET['kode_barang'])) {
    $kode_barang = $_GET['kode_barang'];

    $query = "DELETE FROM barang WHERE kode_barang='$kode_barang'";

    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data Barang Telah Dihapus')</script>";
    }else {
        echo "Error: ". $query . "<br>" . mysqli_error($koneksi);
    }

    header("Location: home.php");
}