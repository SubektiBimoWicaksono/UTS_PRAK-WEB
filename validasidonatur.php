<?php

include 'koneksi.php';

if(isset($_POST['id'])){

$id = $_GET['id'];

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$kategori_donasi = implode(", ", $_POST['kategori_donasi']);
$kategori_donasi = $_POST['kategori_donasi'];
$jumlah_donasi = $_POST['jumlah_donasi'];
$tanggal_donasi = $_POST['tanggal_donasi'];
$pesan= $_POST['pesan'];



if (empty($nama)) {
echo "Nama tidak boleh kosong";
}

if (empty($jk)) {
    echo "Jenis Kelamin tidak boleh kosong";
}


if (empty($alamat)) {
echo "Alamat tidak boleh kosong";
}


if (empty($kategori_donasi)) {
    echo "Kategori donasi tidak boleh kosong";
}


if (empty($tanggal_donasi)) {
echo "Tanggal donasi tidak boleh kosong";
} elseif (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $tanggal_donasi)) {
echo "Format tanggal donasi tidak valid";
}


if (empty($jumlah_donasi)) {
echo "Jumlah donasi tidak boleh kosong";
} elseif (!is_numeric($jumlah_donasi)) {
echo "Jumlah donasi harus berupa angka";
}

if (empty($pesan)) {
    echo "Pesan  tidak boleh kosong";
}


if (!empty($nama) && !empty($alamat) && !empty($jk) && !empty($kategori_donasi) && !empty($tanggal_donasi) && preg_match("/^\d{4}-\d{2}-\d{2}$/", $tanggal_donasi) && !empty($jumlah_donasi) && is_numeric($jumlah_donasi) && !empty($pesan)) {

echo "Donasi berhasil dilakukan";
}
}

?>

