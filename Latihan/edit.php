<?php
include("koneksi.php");
$kode_barang = $_GET['kode_barang'];
$hasil = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode_barang'") or die(mysql_error());
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('Supermarket.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Update Barang</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $data['kode_barang'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga_barang">Harga Barang</label>
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $data['harga_barang'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
                        </form>
                        <a href="home.php" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
                <?php
                if (isset($_POST['proses'])) {
                    $kode_barang = $_POST['kode_barang'];
                    $nama_barang = $_POST['nama_barang'];
                    $harga_barang = $_POST['harga_barang'];

                    $updateQuery = "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang' WHERE kode_barang='$kode_barang'";
                    $result = mysqli_query($koneksi, $updateQuery);

                    echo '<div class="alert alert-dismissible mt-3">';
                    if ($result) {
                        echo '<div class="alert alert-success">Data Berhasil diupdate</div>';
                    } else {
                        echo '<div class="alert alert-danger">Data gagal diupdate</div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>