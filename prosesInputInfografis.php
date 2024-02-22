<?php
error_reporting(0);
include 'koneksi.php';

global $koneksi;

if (isset($_POST['simpan'])) {
  $kode_infografis = $_POST['kode_infografis'];
  $kode_konten = $_POST['kode_konten'];
  $judul_infografis= $_POST['judul_infografis'];
  $tgl_upload = $_POST['tgl_upload'];
  $deskripsi = $_POST['deskripsi'];
  $kategori = $_POST['kategori'];
  $karya = $_POST['karya'];
  $infografis = $_FILES['infografis']['name'];
  $tmp = $_FILES['infografis']['tmp_name'];
  $path = "infografis/" . $infografis;

  if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO infografis VALUES ('$kode_infografis', '$kode_konten', '$judul_infografis', '$tgl_upload', '$deskripsi', '$kategori', '$karya', '$infografis')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Ditambah');window.location.href='infografisDashboard.php'</script> ";
    }
  }
}
?>