<?php
include 'koneksi.php';

// Mendapatkan data yang di-submit dari form
$id_donatur = $_POST['id_donatur'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$kategori_donasi = implode(", ", $_POST['kategori_donasi']);
$tanggal_donasi = $_POST['tanggal_donasi'];
$jumlah_donasi = $_POST['jumlah_donasi'];
$pesan= $_POST['pesan'];

// Menyimpan data ke database
$hasil = mysqli_query($koneksi, "UPDATE data_donasi SET nama='$nama', jk = '$jk', alamat = '$alamat', kategori_donasi = '$kategori_donasi', tanggal_donasi='$tanggal_donasi', jumlah_donasi='$jumlah_donasi', pesan='$pesan' WHERE id_donatur='$id_donatur'");

if (!$hasil){
    die ("Data Gagal Diubah".mysqli_errno($koneksi).mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
}
?>