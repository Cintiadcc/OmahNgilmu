<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_POST['edit'])) {
      $kode_acara = $_POST['kode_acara'];
      $id_user = $_POST['id_user'];
      $nama_acara = $_POST['nama_acara'];
      $penyelenggara= $_POST['penyelenggara'];
      $tgl_acara = $_POST['tgl_acara'];
      $deskripsi = $_POST['deskripsi'];
      $acara = $_FILES['acara']['name'];
      $tmp = $_FILES['acara']['tmp_name'];
      $path = "acara/" . $acara;
    
        if (empty($acara)) {
            $query = "UPDATE acara set id_user = '$id_user', nama_acara = '$nama_acara', penyelenggara = '$penyelenggara', tgl_acara = '$tgl_acara', deskripsi = '$deskripsi' where kode_acara = '$kode_acara'";
        }
        else {
            $file = mysqli_query($koneksi, "SELECT acara FROM acara where kode_acara='$kode_acara'");
            $hasil = mysqli_fetch_array($file);
            $acara_lama=$hasil['acara'];
            unlink("acara/".$acara_lama);

            if (move_uploaded_file($tmp, $path)) {  
                $query = "UPDATE acara set id_user = '$id_user', nama_acara = '$nama_acara', penyelenggara = '$penyelenggara', tgl_acara = '$tgl_acara', deskripsi = '$deskripsi', acara = '$acara'  where kode_acara = '$kode_acara'";
            }
        }

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data Berhasil Diubah');window.location.href='acaraDashboard.php'</script>";
        }
    }

?>