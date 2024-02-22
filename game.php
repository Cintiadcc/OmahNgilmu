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
    
    <!-- Akses Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/gameStyle.css" type="text/css">
    <!-- Logo Title -->
    <link rel="icon" href="img/logo1.png" type="image/x-icon">
    <title>Game - OmahNgilmu</title>
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
                    <a class="nav-link  active" href="game.php">Game</a>
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

    <div class="wrapper">
      <div>
        <h4 class="text-light fw-bold">OmahNgilmu Flips</h4>
      </div>
      <ul class="cards">
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-7.jpg" alt="card-img">
          </div>
        </li>
        <li class="card"> 
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-2.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-3.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-4.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-5.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-6.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-5.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-6.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-7.jpg" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-2.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-3.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="images/img-4.png" alt="card-img">
          </div>
        </li>
        <div class="details">
          <p class="time">Waktu: <span><b>0</b>s</span></p>
          <p class="flips">Flips: <span><b>0</b></span></p>
          <button>Segarkan</button>
        </div>
      </ul>
    </div>
    
    <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="js/gameScript.js"></script>
  </body>
</html>