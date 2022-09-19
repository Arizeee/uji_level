<?php
    include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan peminjam</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="side-bar">
        <img src="images/logo smk putih.png" alt="logo">

        <div class="text-sidebar">
        <p>Starbhak Pustaka</p>
        <p>Perpustakaan Sekolah</p>
        </div>
    </div>
    <div class="link-list">
        <ul>
            <li><a href="tampilanpeminjam.php">Data Pinjam buku</a></li>
            <li><a href="pinjambuku.html">Peminjaman Buku</a></li>
            <li><a href="pinjamedit">Pemngembalian Buku</a></li>
            <li><a href="pinjamedit">Data buku</a></li>
        </ul>
    </div>
    <div class="hero">
        <h2>Perpustakaan SMK Taruna Bhakti</h2>
        <div class="garis"></div>
<br>
        <button class="btn-tambah"><a href="pinjambuku.html">Pinjam Buku</a></button>
    </div>
       <div class="thead">
       <table border="1" cellspacing='0'>
            <th>NISN</th>
            <th>Nama Peminjam</th>
            <th>Nama Buku</th>
            <th>Kode Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Nama Petugas</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
       </div>
            <?php
                $sql = "SELECT * FROM perpustakaansekul";
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                    echo"
                    <tr>
                    <td>$data[nisn]</td>
                    <td>$data[nama_peminjam]</td>
                    <td>$data[nama_buku]</td>
                    <td>$data[kode_buku]</td>
                    <td>$data[tanggal_peminjaman]</td>
                    <td>$data[tanggal_pengembalian]</td>
                    <td>$data[nama_petugas]</td>
                    <td>$data[statuss]</td>
                    <td>
                        <a href='formedit.php?nisn=".$data['nisn']."'>Edit</a>
                        <a href='pinjamhapus.php?nisn=".$data['nisn']."'>Hapus</a>
                    </td>
                    </tr>";
                };
            ?> 
</body>
</html>