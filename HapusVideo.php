<?php
    error_reporting(0);
    include ('koneksi.php');

    if (isset($_GET['id'])) {
        $kode_video = $_GET['id'];
        
        $query = "DELETE from video where kode_video='$kode_video'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal ditambah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data berhasil dihapus !');window.location.href='videoDashboard.php'</script>";
        }
    }
?>