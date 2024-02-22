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
                            <li><a class="dropdown-item" href=""><i class="fa-solid fa-user mx-2"></i>Profil</a></li>
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
                <h4 class="mt-4">Infografis - OmahNgilmu</h4>
                <div class="card mt-4 me-2">
                    <div class="card-header fw-bold">
                        <a class="btn bg-green fw-bold text-light" href="inputInfografis.php"><i class="fa-solid fa-plus mx-2" href="InputInfografis.php"></i>Tambah Baru</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Kode Infografis</center></th>
                                    <th><center>Kode Konten</center></th>
                                    <th><center>Judul Infografis</center></th>
                                    <th><center>Tanggal Upload</center></th>
                                    <th><center>Deskripsi</center></th>
                                    <th><center>Kategori</center></th>
                                    <th><center>Karya</center></th>
                                    <th ><center>Infografis</center></th>
                                    <th width= 120px;><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <?php
                            $i = 1; ?>
                            <?php $result = mysqli_query($koneksi, "SELECT * FROM infografis"); ?>
                            <?php foreach ($result as $row) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['kode_infografis']; ?></td>
                                    <td><?= $row['kode_konten']; ?></td>
                                    <td><?= $row['judul_infografis']; ?></td>
                                    <td><?= $row['tgl_upload']; ?></td>
                                    <td><?= $row['deskripsi']; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td><?= $row['karya']; ?></td>
                                    <td>
                                        <center>
                                            <img src="infografis/<?= $row['infografis']; ?>" border="0" width="80" height="auto">
                                        </center>
                                    </td>
                                    <td><center>
                                        <a href="editInfografis.php?id=<?php echo $row['kode_infografis'];?>" class="btn btn-warning text-light"><i class="fa-solid fa-pen"></i></a>
                                        <a href="hapusInfografis.php?id=<?php echo $row['kode_infografis'];?>" class="btn btn-danger text-light"><i class="fa-solid fa-trash"></i></a>
                                    </center></td>
                                </tr>     
                            </tbody>
                            <?php $i++ ?>
		                    <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/c45423db24.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>