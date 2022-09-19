<?php
    include 'koneksi.php';
    $nisn = $_GET['nisn'];
    $sql = "SELECT * FROM perpustakaansekul WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);
    $data    = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) < 1){
        die or ("data tidak di temukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <form action="pinjamedit.php" method="post">
        <h3> Edit Data peminjam</h3>
        <p><label>NISN : <input value="<?php echo $data ['nisn']?>" required="required" type="hidden" name="nisn"></label></p>
        <p><label>Nama Peminjam : <input value="<?php echo $data ['nama_peminjam']?>"required="required" type="text" name="nama_peminjam"></label></p>
        <p><label>Nama buku : <input value="<?php echo $data ['nama_buku']?>"required="required" type="text" name="nama_buku"></label></p>
        <p><label>Kode buku : <input value="<?php echo $data ['kode_buku']?>"required="required" type="text" name="kode_buku"></label></p>
        <p><label>Tanggal Peminjaman : <input value="<?php echo $data ['tanggal_peminjaman']?>"required="required" type="text" name="tanggal_peminjaman"></label></p>
        <p><label>Tanggal Pengembalian : <input value="<?php echo $data ['tanggal_pengembalian']?>"required="required" type="text" name="tangga_pengembalian"></label></p>
        
        <input type="submit" name="pinjam" value="pinjam">
    </form>
</body>
</html>