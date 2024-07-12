<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('Storage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .container {
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tambah Barang</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            </div>
                            <div class="form-group">
                                <label for="harga_barang">Harga Barang</label>
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                            </div>
                            <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
                        </form>
                        <a href="home.php" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
                <br>
                <?php
                include "koneksi.php";

                if (isset($_POST['proses'])) {
                    $kode_barang = $_POST['kode_barang'];
                    $nama_barang = $_POST['nama_barang'];
                    $harga_barang = $_POST['harga_barang'];

                    $query = "INSERT INTO barang (kode_barang, nama_barang, harga_barang) VALUES ('$kode_barang','$nama_barang','$harga_barang')";

                    if (mysqli_query($koneksi, $query)) {
                        echo "<div class='alert alert-success mt-3'>Data Berhasil Disimpan</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($koneksi) . "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
