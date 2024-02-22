<?php
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
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">
    <!-- Logo Title -->
    <link rel="icon" href="img/logo1.png" type="image/x-icon">
    <title>Admin - OmahNgilmu</title>
</head>
<body>

    <!-- Navbar -->
    <?php
        $query = mysqli_query($koneksi, "SELECT * FROM admins WHERE email = '$_SESSION[email]'");
        $row = mysqli_fetch_assoc($query);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark nav-color fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">Admin | <span class="fw-bold">OmahNgilmu<span></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-light">
                    <li class="nav-item btn dropdown mx-2" style="display: inline;">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: -6px;">
                        <i class="fa-solid fa-user me-2"></i><?php echo $row['username'];?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href=""><i class="fa-solid fa-user mx-2"></i></i><?= $row['name']; ?></a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i>Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- SideBar -->
    <div class="sidebar row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pt-4" height="100%">
            <ul class="flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="dashboard.php"><i class="fa-solid fa-gauge me-3"></i>Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="videoDashboard.php"><i class="fa-solid fa-play me-3"></i>Video</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link warna" href="infografisDashboard.php"><i class="fa-solid fa-bars-progress me-3"></i>Infografis</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="acaraDashboard.php"><i class="fa-solid fa-calendar me-3"></i>Acara</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="quoteDashboard.php"><i class="fa-solid fa-quote-left me-3"></i>Quotes</a><hr class="bg-secondary">
                </li>
            </ul>
        </div>

        <!-- Tabel -->
        <div class="col-md-10">
            <div class="container">
                <h3 class="mt-3 fw-bold">OmahNgilmu</h3>
                <p>Bersama kami wujudkan Indonesia melek literasi</p>
                    <div class="card me-2">
                        <div class="card-header bg-green text-light">
                            Silahkan masukkan infografis!
                        </div>
                        <div class="card-body mt-2">
                            <form action="prosesInputInfografis.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="row g-3">
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label for="kode_infografis">Kode Infografis</label>
                                        <input name="kode_infografis" type="number" id="kode_infografis" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Kode Konten</label>
                                        <input name="kode_konten" type="number" id="kode_konten" class="form-control"  required>
                                    </div>
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Judul Infografis</label>
                                        <input name="judul_infografis" type="text" id="judul_infografis" class="form-control"required>
                                    </div>
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Tanggal Upload</label>
                                        <input name= "tgl_upload" type="date" id="tgl_upload" class="form-control"required>
                                    </div> 
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" type="text" id="deskripsi" class="form-control" placeholder="Tambahkan deskripsi"></textarea>
                                    </div>
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control" required>
                                            <option value="">--Pilih Kategori--</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Hiburan">Hiburan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Lingkungan">Lingkungan</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Politik">Politik</option>
                                            <option value="Teknologi">Teknologi</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group mx-auto">
                                        <label>Karya</label>
                                        <input name="karya" type="text" id="karya" class="form-control"required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>File Infografis</label>
                                        <input name="infografis" type="file" id="infografis" class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input is-valid" type="checkbox" value="" id="validCheck3" aria-describedby="validCheck3Feedback" style="color: #000;" required>
                                            <label class="form-check-label text-dark" for="validCheck3">
                                                Apakah data anda sudah benar?
                                            </label>
                                            <div id="validCheck3Feedback" class="valid-feedback  text-dark">
                                                Pastikan data yang anda masukkan benar.
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn bg-green text-light" name="simpan" type="submit" id="simpan" value="Unggah Infografis">Unggah Infografis</button>
                                    <button type="reset" class="btn btn-danger" name="reset" id="reset" value="Kosongkan">Kosongkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>