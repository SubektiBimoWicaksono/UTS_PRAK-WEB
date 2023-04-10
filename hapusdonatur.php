<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    // Mendapatkan id  dari URL
    $id = $_GET['id'];

    // Mengeksekusi query untuk menghapus data  dari database
    $hapus = mysqli_query($koneksi, "DELETE FROM data_donasi WHERE id_donatur='$id'");
    if($hapus){
        // Jika berhasil dihapus, redirect ke halaman utama
        echo "<script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php';
        </script>";
    } else{
        // Jika gagal dihapus, tampilkan pesan error
        die("Data gagal dihapus." . mysqli_error($koneksi));
    }
} else{
    // Jika tidak ada id  yang diberikan, redirect ke halaman utama
    header("Location: index.php");
}
?>