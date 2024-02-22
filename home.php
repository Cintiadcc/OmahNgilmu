<?php
error_reporting(0);
include 'koneksi.php';
session_start();
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
    <title>Beranda - OmahNgilmu</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$_SESSION[email]'");
        $row = mysqli_fetch_assoc($query);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent nav-color position-fixed w-100" id="navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
        <img src="img/logo1.png" alt="" width="30" class="mx-2">OmahNgilmu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-light">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
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
                    <a class="nav-link" href="game.php">Game</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="tentang.php">Tentang</a>
                </li>  

                <?php if ($_SESSION["email"]) : ?>
                <li class="nav-item btn dropdown mx-2" style="display: inline;">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: -6px;">
                    <i class="fa-solid fa-user me-2"></i><?php echo $row['username'];?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href=""><i class="fa-solid fa-user mx-2"></i></i><?= $row['name']; ?></a></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i>Keluar</a></li>
                    </ul>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    </nav>

    <!-- Hero -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <h1 class="headline">Bersama kami wujudkan Indonesia <br>melek literasi</h1>
            <p class="para-light py-3"><span class="fw-bold">OmahNgilmu </span>hadir dengan berbagai macam konten menarik dan<br>membantumu menemukan berbagai jenis acara.</p>
            <div class="row">
                <div class="col-md-1">
                    <div class="my-3">
                        <a class="btn tombol text-light" href="login.php">Masuk</a>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="my-3">
                        <a class="btn btn-outline-light" href="register.php">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Panel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 panel">
                <div class="row ms-5">
                    <div class="col-lg">
                        <img src="img/panel/edukatif.png" alt="informatif" class="float-start">
                        <h4 class="my-4">Edukatif</h4>
                    </div>
                    <div class="col-lg">
                        <img src="img/panel/informatif.png" alt="edukatif" class="float-start">
                        <h4 class="my-4">Informatif</h4>
                    </div>
                    <div class="col-lg">
                        <img src="img/panel/kreatif.png" alt="kreatif" class="float-start">
                        <h4 class="my-4">Kreatif</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Video Terbaru -->
    <?php $result = mysqli_query($koneksi, "SELECT * FROM video ORDER BY kode_video DESC LIMIT 3"); ?>
    <section id="v-terbaru">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h2>Video Terbaru</h2>               
                </div>
                <div class="col-2">
                    <a href="video.php" class="btn tombol text-light mt-0 float-end">Lihat Semua</a>                
                </div>
            </div>
            <div class="row mt-4">
                <?php foreach ($result as $row) :?>
                <div class="col-4">
                    <div class="card vid-new">
                        <iframe class="vid" width="355" height="200" style="border-radius: 10px 10px 0 0;" src="<?= $row['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="card-body">
                            <h4><?= $row['judul_video']; ?></h4>
                            <p class="text-muted" style="font-size: 18px;"><?= $row['kategori']; ?></p>
                            <p class="text-muted" style="font-size: 14px; margin-top: -10px;">Sumber : <?= $row['karya']; ?></p>
                            <a href="detailVideo.php?kode_video=<?php echo $row['kode_video']?>" class="btn tombol text-light" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Infogrfis terbaru -->
    <?php $result = mysqli_query($koneksi, "SELECT * FROM infografis ORDER BY kode_infografis DESC LIMIT 3"); ?>
    <section id="i-terbaru">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h2 class="text-light mt-5">Infografis Terbaru</h2>
                </div>
                <div class="col-2 mt-5">
                    <a href="infografis.php" class="btn bg-light text-success float-end">Lihat Semua</a>   
                </div>
            </div>
            <div class="row mt-4">  
                <?php foreach ($result as $row) : ?>
                <div class="col-4">
                    <div class="card ig-new">
                        <img  class="shadow" width="355" height="450" style="border-radius: 10px 10px 0 0;" src="infografis/<?= $row['infografis']; ?>" alt="<?= $row['judul_infografis']; ?>" >
                        <div class="card-body">
                            <h4><?= $row['judul_infografis']; ?></h4>
                            <p class="text-muted" style="font-size: 18px;"><?= $row['kategori']; ?></p>
                            <p class="text-muted" style="font-size: 14px;margin-top: -10px;">Sumber : <?= $row['karya']; ?></p>
                            <a href="detailInfografis.php?kode_infografis=<?php echo $row['kode_infografis']?>" class="btn tombol text-light" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Acara Terbaru -->
    <?php $result = mysqli_query($koneksi, "SELECT * FROM acara ORDER BY kode_acara DESC LIMIT 2"); ?>
    <section id="a-terbaru">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h2 class="text">Acara Terbaru</h2>
                </div>
                <div class="col-2">
                    <a href="acara.php" class="btn tombol text-light float-end">Lihat Semua</a>
                </div>
            </div>
            <div class="container mt-4">
            <div class="row">
                <?php foreach ($result as $row) :?>
                <div class="card mx-auto vid-pop mt-2">
                    <div class="row">
                        <div class="col-md-2 p-3">
                            <img src="acara/<?= $row['acara']; ?>" class="img-fluid vid" alt="...">
                        </div>
                        <div class="col-md-10" >
                        <div class="card-body mt-2">
                            <h3><?= $row['nama_acara']; ?></h3>
                            <h5><?= $row['penyelenggara']; ?></h5>
                            <p class="card-text"><?= $row['deskripsi']; ?></p>
                            <a href="detailAcara.php?kode_acara=<?php echo $row['kode_acara']?>" class="btn tombol text-light" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </section>

    <!-- Quotes -->
    <?php $result = mysqli_query($koneksi, "SELECT * FROM quote ORDER BY id_quote DESC LIMIT 1"); ?>
    <section id="v-terpopuler" style="margin-top: -80px;">
        <div class="container">
        <div class="card">
            <div class="card-header tombol">
                <h3 class="text-light">Quote | OmahNgilmu</h3>
            </div>
            <?php foreach ($result as $row) :?>
            <div class="card-body">
                <blockquote class="blockquote">
                <p><?= $row['isi_quote']; ?></p><br>
                <p class="blockquote-footer"><?= $row['nama_quoter']; ?></p>
                </blockquote>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container d-md-flex py-4">

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


  <script src="js/script.js"></script>  
  <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>