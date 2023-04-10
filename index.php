<!DOCTYPE html>
<html>

<head>
    <title>DAFTAR DONATUR</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>


</head>

<body>
    <?php
        error_reporting();
        include 'koneksi.php';
    ?>
    
    <div class="container">
    <h1 style="text-align:center;">REKAP DATA DONATUR</h1>
    <center><a href="inputdonatur.php">TAMBAHKAN DATA</a></center>

    <table id="example"class="table table-striped table-bordered" style="width:100%" border='1'>
        <thead><tr>
            <th>No</th>
            <th>Id Donatur</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kategori Donasi</th>
            <th>Tanggal Donasi</th>
            <th>Jumlah Donasi</th>
            <th>Pesan</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        </thead>
       

        

        <?php
        $no=0;
        $result = mysqli_query($koneksi, "SELECT * FROM data_donasi ORDER BY id_donatur ASC;");
        while ($row = mysqli_fetch_array($result)) {
                $no++;
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['id_donatur'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['jk'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['kategori_donasi'] . "</td>";
                echo "<td>" . $row['tanggal_donasi'] . "</td>";
                echo "<td>" . $row['jumlah_donasi'] . "</td>";
                echo "<td>" . $row['pesan'] . "</td>";
                echo "<td><a href='editdonatur.php?id=" . $row['id_donatur'] . "'>Edit</a></td>";
                echo "<td><a href='hapusdonatur.php?id=" . $row['id_donatur'] . "'>Hapus</a></td>";
                echo "</tr>";



            }

        mysqli_close($koneksi);
        ?>
    </table>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>

    <br>
    </div>
</body>

</html>