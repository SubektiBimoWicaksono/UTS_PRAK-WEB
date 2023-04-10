<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA PEGAWAI PT.JAYA ABADI</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
    error_reporting();
    include 'koneksi.php';
    if(isset($_GET['id'])){
        
    $id = $_GET['id'];


    $result = mysqli_query($koneksi, "SELECT * FROM data_donasi WHERE id_donatur='$id'");
    while($row = mysqli_fetch_array($result)){
        $id_donatur = $row['id_donatur'];
        $nama = $row['nama'];
        $jk = $row['jk'];
        $alamat = $row['alamat'];
        $kategori_donasi = $row['kategori_donasi'];
        $tanggal_donasi = $row['tanggal_donasi'];
        $jumlah_donasi = $row['jumlah_donasi'];
        $pesan = $row['pesan'];
    }
    } else{
        header("Location: index.php");
    }
?>
	<h1>EDIT DATA DONATUR</h1>
	<form action="proseseditdonatur.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <fieldset>
        <legend>DATA DONATUR</legend>
            <table>
        <tr>
            <td><label for="id_donatur">ID Donatur</label></td>
            <td>:</td>
            <td><input type="number" id="id_donatur" name="id_donatur" readonly value="<?php echo $id_donatur;?>"></td>
        </tr>
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td>:</td>
            <td><input type="text" id="nama" name="nama" required value="<?php echo $nama;?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="Laki-Laki"  <?php if ($jk=='Laki-Laki') echo 'checked'?>>Laki-Laki<br></td>
            <td><input type="radio" name="jk" value="Perempuan"  <?php if ($jk=='Perempuan') echo 'checked'?>>Perempuan<br></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td>:</td>
            <td><input type="text" id="alamat" name="alamat" required value="<?php echo $alamat;?>"></td>
        </tr>
        <tr>
            <td>Kategori Donasi</td>
            <td><input type="radio" name="kategori_donasi" value="bantuan medis"  <?php if ($kategori_donasi=='bantuan medis') echo 'checked'?>>Bantuan Medis<br></td>
            <td><input type="radio" name="kategori_donasi" value="panti asuhan"  <?php if ($kategori_donasi=='panti asuhan') echo 'checked'?>>Panti Asuhan<br></td>
            <td><input type="radio" name="kategori_donasi" value="beasiswa dan pendidikan"  <?php if ($kategori_donasi=='beasiswa dan pendidikan') echo 'checked'?>>beasiswa dan pendidikan<br></td>
        </tr>
        <tr>
            <td>Tanggal Donasi</td>
            <td>:</td>
            <td><input type="date" name="tanggal_donasi" value="
            <?php echo $tanggal_donasi;?>"></td>
        </tr>
        <tr>
            <td><label for="jumlah_donasi">Jumlah Donasi:</label></td>
            <td>:</td>
            <td><input type="number" id="jumlah_donasi" name="jumlah_donasi" required value="<?php echo $jumlah_donasi;?>"></td>
        </tr>
        <tr>
            <td><label for="pesan">Pesan:</label></td>
            <td>:</td>
            <td><input type="text" id="pesan" name="pesan" required value="<?php echo $pesan;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>	<input type="submit" id="edit" name="edit" value="Edit"required></td>
        </tr>

            </table>
        </fieldset>
</form>

</body>
</html>