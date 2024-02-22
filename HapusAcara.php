<?php
    error_reporting(0);
    include ('koneksi.php');

    if (isset($_GET['id'])) {
        $kode_acara = $_GET['id'];

        $file = mysqli_query($koneksi, "SELECT acara FROM acara where kode_acara='$kode_acara'");
        $hasil = mysqli_fetch_array($file);
        $acara_lama=$hasil['acara'];
        unlink("acara/".$acara_lama);

        $query = "DELETE from acara where kode_acara='$kode_acara'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal ditambah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data berhasil dihapus !');window.location.href='acaraDashboard.php'</script>";
        }
    }
?>