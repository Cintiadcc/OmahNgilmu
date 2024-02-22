<?php
    error_reporting(0);
    include ('koneksi.php');

    if (isset($_GET['id'])) {
        $id_quote = $_GET['id'];

        $query = "DELETE from quote where id_quote='$id_quote'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal ditambah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data berhasil dihapus !');window.location.href='quoteDashboard.php'</script>";
        }
    }
?>