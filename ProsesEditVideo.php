<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_POST['edit'])) {
      $kode_video = $_POST['kode_video'];
      $kode_konten = $_POST['kode_konten'];
      $judul_video = $_POST['judul_video'];
      $tgl_upload = $_POST['tgl_upload'];
      $deskripsi = $_POST['deskripsi'];
      $kategori= $_POST['kategori'];
      $karya= $_POST['karya'];
      $video = $_POST['video'];
      
    $query = "UPDATE video set kode_konten = '$kode_konten', judul_video = '$judul_video', tgl_upload = '$tgl_upload', deskripsi = '$deskripsi', kategori = '$kategori', karya = '$karya', video = '$video'  where kode_video = '$kode_video'";
    
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
    }
    else {
        echo "<script>alert('Data Berhasil Diubah');window.location.href='videoDashboard.php'</script>";
    }
}
?>