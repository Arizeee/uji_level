<?php
    include 'koneksi.php';
    if(isset($_POST['pinjam']));
    $nisn = $_POST['nisn']; 
    $nama_peminjam = $_POST['nama_peminjam']; 
    $nama_buku = $_POST['nama_buku'];
    $kode_buku = $_POST['kode_buku']; 
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $nama_petugas = $_POST['nama_petugas'];
    $statuss = $_POST['status'];

    $sql = "UPDATE perpustakaansekul set nama_peminjam='$nama_peminjam', nama_buku='$nama_buku', kode_buku='$kode_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian',nama_petugas='$nama_petugas', statuss='$statuss' WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilanpeminjam.php');
    }else{
        header('Location: pinjamedit?status=gagal');
    }
?>