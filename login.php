<?php
error_reporting(0);

session_start();
$koneksi=mysqli_connect("localhost","root","","omahngilmu");

    if (isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];

        $sql = mysqli_query($koneksi, "SELECT username FROM users WHERE email = $email");
        $row = mysqli_fetch_assoc($sql);

            if ($key = $row['password']) { 
                $_SESSION['login'] = true;
            }
    }

    if (isset($_SESSION["login"])) {
        header("Location: home.php");
    }
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
    <title>Masuk - OmahNgilmu</title>
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
                                <h2 class="mb-1 fw-bold">Masuk</h2>
                                <p>Belum punya Akun? <a href="register.php" class="text-success">Daftar Sekarang</a></p>
                                <form action="" method="POST">
                                <?php if($error != ''){ ?>
                                    <div class="alert alert-danger" role="alert">Silahkan masukkan ulang!</div>
                                <?php } ?>
                                <div class="row">
                                    <div class="mb-3 col-10">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username Anda!">
                                    </div>
                                    <div class="mb-3 col-10">
                                        <label for="InputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Masukkan Password">
                                        <?php if($validate != '') {?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php }?>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <button type="submit" name="login" class="btn tombol text-light">Masuk</button>
                                    </div>
                                    <p><a href="loginAdmin.php" class="text-success">Masuk</a> sebagai Admin</p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- mengecek apakah form disubmit atau tidak -->
<?php

if (isset($_POST["login"])) {

$username = $_POST["username"];
$pass = mysqli_real_escape_string($koneksi,md5($_POST['password']));

$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username ='$username'");
$cek_akun = mysqli_num_rows($sql);
$data_akun = mysqli_fetch_assoc($sql);
$password = $data_akun['password'];

    if ($cek_akun > 0) {
        if ($pass == $password) {
            $_SESSION['username']= $username;
            $_SESSION['email']= $data_akun['email'];

            if(isset($_POST['remember'])){
                if (isset($_POST["remember"])) {
                    setcookie('email', $data_akun['email'], time() + 60);
                    setcookie('name', $data_akun['name'], time() + 60);
                    setcookie('pass', $data_akun['password'], time() + 60);
                }
            }
            header('Location:home.php');
        }else{
            echo"<script>
                    alert('password Anda salah');
                </script>";
            }
        }
        $error= true;
    }
?> 
</body>
</html>