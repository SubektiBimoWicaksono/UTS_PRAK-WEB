<?php
        error_reporting();
        include 'koneksi.php';
        if(isset($_POST['simpan'])){

            $id_donatur = $_POST['id_donatur'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $kategori_donasi = implode(", ", $_POST['kategori_donasi']);
            $tanggal_donasi = $_POST['tanggal_donasi'];
            $jumlah_donasi = $_POST['jumlah_donasi'];
            $pesan= $_POST['pesan'];

                // Query untuk menyimpan data ke database
                $query = "INSERT INTO data_donasi VALUES ('$id_donatur','$nama', '$jk', '$alamat', '$kategori_donasi', '$tanggal_donasi','$jumlah_donasi','$pesan')";
                $result = mysqli_query($koneksi, $query);

                // Cek apakah proses simpan data berhasil atau tidak
                if($result){
                    echo "<script>alert('Data berhasil disimpan!'); window.location = 'index.php';</script>";
                }else{
                    echo "<script>alert('Data gagal disimpan!'); window.location = 'inputdonatur.php';</script>";
                }
        }
    ?>