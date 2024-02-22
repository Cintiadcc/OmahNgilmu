<?php
    error_reporting(0);
    include ('koneksi.php');

    if (isset($_GET['id'])) {
        $kode_infografis = $_GET['id'];

        $file = mysqli_query($koneksi, "SELECT infografis FROM infografis where kode_infografis='$kode_infografis'");
        $hasil = mysqli_fetch_array($file);
        $infografis_lama=$hasil['infografis'];
        unlink("infografis/".$infografis_lama);

        $query = "DELETE from infografis where kode_infografis='$kode_infografis'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal ditambah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data berhasil dihapus !');window.location.href='infografisDashboard.php'</script>";
        }
    }
?>