<?php
error_reporting(0);
include 'koneksi.php';

global $koneksi;

if (isset($_POST['simpan'])) {
  $kode_acara = $_POST['kode_acara'];
  $id_user = $_POST['id_user'];
  $nama_acara= $_POST['nama_acara'];
  $penyelenggara = $_POST['penyelenggara'];
  $tgl_upload = $_POST['tgl_upload'];
  $deskripsi = $_POST['deskripsi'];
  $acara = $_FILES['acara']['name'];
  $tmp = $_FILES['acara']['tmp_name'];
  $path = "acara/" . $acara;

  if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO acara VALUES ('$kode_acara', '$id_user', '$nama_acara', '$penyelenggara', '$tgl_upload', '$deskripsi', '$acara')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Ditambah');window.location.href='acaraDashboard.php'</script> ";
    }
  }
}
?>