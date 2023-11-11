<?php

include("../koneksi.php");

if( isset($_GET['nisn']) ){

    // ambil id dari query string
    $nisn = $_GET['nisn'];

    // buat query hapus
    $sql = "DELETE FROM tb_siswa WHERE nisn=$nisn";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>