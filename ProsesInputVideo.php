<?php
error_reporting(0);
include 'koneksi.php';

global $koneksi;

if (isset($_POST['simpan'])) {
  $kode_video = $_POST['kode_video'];
  $kode_konten = $_POST['kode_konten'];
  $judul_video= $_POST['judul_video'];
  $tgl_upload = $_POST['tgl_upload'];
  $deskripsi = $_POST['deskripsi'];
  $kategori = $_POST['kategori'];
  $karya = $_POST['karya'];
  $video = $_POST['video'];

  $query = "INSERT INTO video VALUES ('$kode_video', '$kode_konten', '$judul_video', '$tgl_upload', '$deskripsi', '$kategori', '$karya', '$video')";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data Berhasil Ditambah');window.location.href='videoDashboard.php'</script> ";
  }
}
