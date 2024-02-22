<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Akses Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Logo Title -->
    <link rel="icon" href="img/logo1.png" type="image/x-icon">
    <title>Buat Akun - OmahNgilmu</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">
                <div class="shadow">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bg-login h-100"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h2 class="mb-1 fw-bold">Buat Akun Admin</h2>
                                <p>Sudah punya Akun? <a href="loginAdmin.php" class="text-success">Masuk</a></p>
                                <form action="registerAdmin.php" method="POST">
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="mb-2 col-12">
                                        <label for="InputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="abc@contoh.com">
                                    </div>
                                    <div class="mb-2 col-12">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                                    </div>
                                    <div class="mb-2 col-6">
                                        <label for="InputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="InputPassword" name="password">
                                    </div>
                                    <div class="mb-2 col-6">
                                        <label for="InputPassword" class="form-label">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="InputRePassword" name="repassword">
                                    </div>
                                    <div class="mt-3 col-12">
                                        <button type="submit" name="regAdmin" class="btn tombol text-light">Buat Akun</button>
                                    </div>
                                    <p class="mt-2"><a href="register.php" class="text-success">Buat akun</a> User</p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

if(isset($_POST['regAdmin'])){
    $username = ($_POST['username']);
    $name     = ($_POST['name']);
    $email    = ($_POST['email']);
    $password = ($_POST['password']);
    $repass   = ($_POST['repassword']);

    $query = mysqli_query($koneksi,"SELECT email FROM admins WHERE email = '$email'");
    if (mysqli_fetch_assoc($query)) {
        echo"<script>
                alert('Akun sudah terdaftar');
            </script>";
        echo "<script>location='loginAdmin.php'</script>";
    }else{
        if($password == $repass){
            $password = md5($password);
            $query=mysqli_query($koneksi, "INSERT INTO admins (username,name,email, password ) VALUES ('$username','$name','$email','$password')");
            if($query){
                echo"<script>
                    alert('Registrasi berhasil');
                </script>";
                echo "<script>location='loginAdmin.php'</script>";
            }else{
                echo"<script>
                        alert('Registrasi gagal');
                    </script>";
            }
        }else{
            echo"<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
        }
    }
}
?>
</body>
</html>