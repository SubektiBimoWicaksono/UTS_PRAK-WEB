<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA DONATUR</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
        error_reporting();
        include 'koneksi.php';
    ?>
	<h1>Input Data Donatur</h1>
	<form action="prosesinputdonatur.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <fieldset>
        <legend>DATA DONATUR</legend>
            <table>
        <tr>
            <td>	<label for="id_donatur">ID Donatur</label></td>
            <td>:</td>
            <td>	<input type="number" id="id_donatur" name="id_donatur" required pattern="[1234567-100000000]"></td>
        </tr>
        <tr>
            <td>	<label for="nama">Nama:</label></td>
            <td>:</td>
            <td>	<input type="text" id="nama" name="nama" required minlength="5" maxlength="25"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br></td>
            <td><input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td>:</td>
            <td><input type="text" id="alamat" name="alamat" required></td>
        </tr>
        <tr>
            <td>Kategori Donasi</td>
            <td><input type="radio" name="kategori_donasi"  value="bantuan medis">Bantuan Medis<br></td>
            <td><input type="radio" name="kategori_donasi" value="panti asuhan">Panti Asuhan<br></td>
            <td><input type="radio" name="kategori_donasi"  value="beasiswa dan pendidikan">Beasiswa dan Pendidikan<br></td>
        </tr>
        <tr>
            <td>Tanggal Donasi</td>
            <td>:</td>
            <td><input type="date" name="tanggal_donasi"></td>
        </tr>
        <tr>
            <td><label for="jumlah_donasi">Jumlah Donasi</label></td>
            <td>:</td>
            <td><input type="number" id="jumlah_donasi" name="jumlah_donasi" required></td>
        </tr>
        <tr>
            <td><label for="pesan">Pesan:</label></td>
            <td>:</td>
            <td><input type="text" id="pesan" name="pesan" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>	<input type="submit" id="simpan" name="simpan" value="Simpan"required></td>
        </tr>

            </table>
        </fieldset>
</form>

</body>
</html>