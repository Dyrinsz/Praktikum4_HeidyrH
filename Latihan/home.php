<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('Windows.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        h1 {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1><h3 class="text-white">Daftar Barang</h3></h1>

        <table class="table table-bordered table-striped bg-white shadow-sm">
            <thead class="thead-light">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";

                $result = mysqli_query($koneksi, "SELECT * FROM barang");

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['kode_barang'] . "</td>";
                    echo "<td>" . $row['nama_barang'] . "</td>";
                    echo "<td>" . $row['harga_barang'] . "</td>";
                    echo "<td>
                            <a href='edit.php?kode_barang=" . $row['kode_barang'] . "' class='btn btn-sm btn-primary'>Edit</a>
                            <a href='delete.php?kode_barang=" . $row['kode_barang'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Apakah kamu yakin untuk menghapus item ini?\")'>Delete</a>
                          </td>";
                    echo "</tr>";  
                }
                ?>
            </tbody>
        </table>

        <a href="barang-tambah.php" class="btn btn-success mt-3">Tambah Barang</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>