<?php
    error_reporting(0);
    include 'koneksi.php';

    session_start();

    if (isset($_GET["kode_infografis"])) {
        $kode_infografis = ($_GET["kode_infografis"]);
        
        $result = mysqli_query($koneksi, "SELECT * FROM infografis WHERE kode_infografis='$kode_infografis'");

        $row = mysqli_fetch_array($result);
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
    <title>Video - OmahNgilmu</title>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-tarPOST="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="home.php">Beranda</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <!-- Search -->
    <section id="v-terpopuler">
        <div class="container">
            <div class="row  mt-4 justify-content-center">
                <div class="col-8">
                    <form method="get" action="video.php" class="d-flex">
                        <input class="form-control me-3" type="search" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" value="">
                        <button class="btn tombol text-light" type="submit" name="search" value="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>             
                </div>
            </div>
        </div>
    </section>

    <!-- Infogafis -->
    <section id="v-terbaru">
        <div class="container" style="margin-top: -90px;">
            <div class="row ">
                <?php foreach ($result as $row) :?>
                <div class="col-5">
                    <div class="card vid-new">
                    <img style="border-radius: 10px;" src="infografis/<?= $row['infografis']; ?>" class="vid" alt="<?= $row['judul_infografis']; ?>">
                    </div>
                </div>
                <div class="col-7">
                    <div class="card vid-new p-3">
                        <h4 class="card-title"><?= $row['judul_infografis']; ?></h4>
                        <p class="card-text"><small class="text-muted">Diupload pada <?= $row['tgl_upload']; ?></small></p>
                        <h6>Kategori</h6>
                        <p><?= $row['kategori']; ?></p>
                        <h6>Deskripsi</h6>
                        <p class="card-text"><?= $row['deskripsi']; ?></p>
                        <p class="text-muted">Sumber : <?= $row['karya']; ?></p>
                    </div> 
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

    <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>                        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>