<?php
include 'koneksi.php';
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/box-icon/boxicons.min.css" rel="stylesheet">
    <!-- Akses Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Logo Title -->
    <link rel="icon" href="img/logo1.png" type="image/x-icon">
    <title>Tentang - OmahNgilmu</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$_SESSION[email]'");
        $row = mysqli_fetch_assoc($query);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100" id="navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
        <img src="img/logo1.png" alt="" width="30" class="mx-2">OmahNgilmu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-light">
                <li class="nav-item mx-2">
                    <a class="nav-link " aria-current="page" href="home.php">Beranda</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Konten
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="video.php">Video</a></li>
                        <li><a class="dropdown-item" href="infografis.php">Infografis</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="acara.php">Acara</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link " href="game.php">Game</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link  active" href="tentang.php">Tentang</a>
                </li>  

                <?php if ($_SESSION["email"]) : ?>
                <li class="nav-item btn dropdown mx-2" style="display: inline;">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: -6px;">
                    <i class="fa-solid fa-user me-2"></i><?php echo $row['username'];?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href=""><i class="fa-solid fa-user mx-2"></i><?= $row['name']; ?></a></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i>Keluar</a></li>
                    </ul>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    </nav>

    <section id="v-terpopuler">
        <div class="container">
            <div class="row  mt-4">
                <div class="col-12">
                    <h2>Tentang OmahNgilmu</h2>               
                </div>
            </div>
        </div>
    </section>

    <section id="v-terpopuler">
        <div class="container">
            <div class="row">
                <div class="card mx-auto vid-pop" style="margin-top: -80px;">
                    <div class="row">
                        <div class="col-md-3 p-5" >
                            <img src="img/logo1.png" class="img-fluid vid"  width="200" alt="Logo OmahNgilmu">
                        </div>
                        <div class="col-md-9 p-4" >
                        <div class="card-body">
                            <h3 class="fw-bold">OmahNgilmu</h3>
                            <p class="card-text">OmahNgilmu merupakan platform digital yang bergerak di bidang edukasi. Karena perkembangan teknologi dan informasi yang semakin maju ,maka diperlukan juga teknologi literasi digital pada masa sekarang. Literasi digital berfokus pada akses informasi berbasis teknologi informasi dan Komunikasi.
                            <br><br>
                            Dengan adanya internet sekarang juga mempermudah masyarakat dalam mencari informasi dan mengakses layanan internet. Literasi digital sangat penting sekarang ini karena dengan literasi digital yang di kemas secara menarik akan menarik perhatian konsumen untuk menggunakan literasi digital yang ada.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team">
        <div class="container">
            <div class="row"  style="display: flex; justify-content: space-between;">
                <div class="col-12">
                    <h2>Tim OmahNgilmu</h2>
                    <p>Anda dapat melakukan pengajuan konten dengan cara menghubungi salah satu dari anggota tim kami.</p>               
                </div>
                <div class="card ms-0 mt-3 vid-pop" style="max-width: 560px; height: 120px;">
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <img src="img/female-avatar.jpg" class="img-fluid  avatar" alt="..." style="height: 85px;">
                        </div>
                        <div class="col-md-9">
                        <div class="card-body">
                            <h4 style="margin-left: -40px;">Julia Elinda Ifa Sari</h4>
                            <div class="sosmed" style="margin-left: -40px;">
                                <a href="#" class="instagram mx-1 ms-0"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-0 mt-2 vid-pop" style="max-width: 560px; height: 120px;">
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <img src="img/female-avatar.jpg" class="img-fluid  avatar" alt="..." style="height: 85px;">
                        </div>
                        <div class="col-md-9">
                        <div class="card-body">
                            <h4 style="margin-left: -40px;">Eliya Dwi Maulidda</h4>
                            <div class="sosmed" style="margin-left: -40px;">
                                <a href="#" class="instagram mx-1 ms-0"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-0 mt-2 vid-pop" style="max-width: 370px; height: 95px;">
                    <div class="row">
                        <div class="col-md-5 p-2">
                            <img src="img/female-avatar.jpg" class="img-fluid  avatar" alt="..." style="height: 75px;">
                        </div>
                        <div class="col-md-7">
                        <div class="card-body">
                            <h5 style="margin-left: -60px;">Ais Fitria N</h5>
                            <div class="sosmed" style="margin-left: -60px;">
                                <a href="#" class="instagram mx-1 ms-0"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-0 mt-2 vid-pop" style="max-width: 370px; height: 95px;">
                    <div class="row">
                        <div class="col-md-5 p-2">
                            <img src="img/female-avatar.jpg" class="img-fluid  avatar" alt="..." style="height: 75px;">
                        </div>
                        <div class="col-md-7">
                        <div class="card-body">
                            <h5 style="margin-left: -60px;">Cintia Dwi C.</h5>
                            <div class="sosmed" style="margin-left: -60px;">
                                <a href="#" class="instagram mx-1 ms-0"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-0 mt-2 vid-pop" style="max-width: 370px; height: 95px;">
                    <div class="row">
                        <div class="col-md-5 p-2">
                            <img src="img/male-avatar.jpg" class="img-fluid  avatar" alt="..." style="height: 75px;">
                        </div>
                        <div class="col-md-7">
                        <div class="card-body">
                            <h5 style="margin-left: -60px;">Abi Rahmawan</h5>
                            <div class="sosmed" style="margin-left: -65px;">
                                <a href="#" class="instagram mx-1"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter mx-1"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container d-md-flex py-4 mt-5">

        <div class="me-md-auto text-center text-light text-md-start">
            <div class="copyright">
            &copy; Copyright <strong><span>Omahngilmu</span></strong>. All Rights Reserved
            </div>
            <div class="credits">Kelompok 3</a>
            </div>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
        </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>