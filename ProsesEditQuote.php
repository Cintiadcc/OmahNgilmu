<?php
    error_reporting(0);
    include 'koneksi.php';

    
    if (isset($_POST['edit'])) {
        $id_quote = $_POST['id_quote'];
        $nama_quoter = $_POST['nama_quoter'];
        $isi_quote = $_POST['isi_quote'];
        
      $query = "UPDATE quote set nama_quoter = '$nama_quoter', isi_quote = '$isi_quote' where id_quote = '$id_quote'";
      
      $result = mysqli_query($koneksi, $query);
  
      if (!$result) {
          die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
      }
      else {
          echo "<script>alert('Data Berhasil Diubah');window.location.href='quoteDashboard.php'</script>";
      }
  }
?>