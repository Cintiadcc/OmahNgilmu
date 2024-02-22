<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_POST['edit'])) {
      $kode_infografis = $_POST['kode_infografis'];
      $kode_konten = $_POST['kode_konten'];
      $judul_infografis = $_POST['judul_infografis'];
      $tgl_upload = $_POST['tgl_upload'];
      $deskripsi = $_POST['deskripsi'];
      $kategori= $_POST['kategori'];
      $karya= $_POST['karya'];
      $infografis = $_FILES['infografis']['name'];
      $tmp = $_FILES['infografis']['tmp_name'];
      $path = "infografis/" . $infografis;
    

        if (empty($infografis)) {
            $query = "UPDATE infografis set kode_konten = '$kode_konten', judul_infografis = '$judul_infografis', tgl_upload = '$tgl_upload', deskripsi = '$deskripsi', kategori = '$kategori', karya = '$karya'  where kode_infografis = '$kode_infografis'";
        }
        else {
            $file = mysqli_query($koneksi, "SELECT infografis FROM infografis where kode_infografis='$kode_infografis'");
            $hasil = mysqli_fetch_array($file);
            $infografis_lama=$hasil['infografis'];
            unlink("infografis/".$infografis_lama);

            if (move_uploaded_file($tmp, $path)) {  
                $query = "UPDATE infografis set kode_konten = '$kode_konten', judul_infografis = '$judul_infografis', tgl_upload = '$tgl_upload', deskripsi = '$deskripsi', kategori = '$kategori', karya = '$karya', infografis = '$infografis'  where kode_infografis = '$kode_infografis'";
            }
        }

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data Berhasil Diubah');window.location.href='infografisDashboard.php'</script>";
        }
    }

?>