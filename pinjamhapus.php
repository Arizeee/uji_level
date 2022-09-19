<?php
    include 'koneksi.php';
    $nisn = $_GET['nisn'];
    $sql = "DELETE FROM perpustakaansekul WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilanpeminjam.php');
    }else{
        header('Location: pinjamhapus?status=gagal');
    }
?>
