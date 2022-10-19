<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio Januar</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/coba.css" rel="stylesheet" />
    <link href="css/project.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/preloader.css" rel="stylesheet" />
</head>
<body>
<?php
require_once "navbar.php";
?>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">JANUAR</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Web development, UI/UX designer, Back end programmer.</h2>
                    <a class="btn btn-primary" href="about.php">My Profile</a>
                </div>
            </div>
        </div>
    </header>
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5 mt-5 align-items-center">
            <?php
            include "koneksi.php";
            if (!koneksi()){
                die("Koneksi Error");
            }
            $querySQL = "SELECT * FROM home";
            $execQuerySQL = mysqli_query(koneksi(),$querySQL);
            
            if(mysqli_num_rows($execQuerySQL) > 0){
                while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>
                <div class="col-xl-8 col-lg-7">
                    <img class="img-fluid mb-3 mb-lg-0" src="assets/img/foto1.jpg"<?= $row['foto'] ?> alt="..." />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4><?= $row['nama'] ?></h4>
                        <p class="text-black-50 mb-0"> <?= $row['keterangan'] ?></p>
                    <?php
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <a href="https://www.figma.com/proto/nJl6MDoq3X7vyupP1aq8Y2/Tugas?node-id=5%3A141&scaling=min-zoom&page-id=5%3A141&starting-point-node-id=36%3A206">
                        <img class="img-fluid" src="assets/img/HomePage.png" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Project</h4>
                                <h6 class="text-white-50">UI E-Learning</h6>
                                <p class="mb-0 text-white-50">Project UI/UX website E-learning. Memberikan pengajaran melalui video yang dapat diakses oleh semua orang.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php
    require_once "footer.php";
    ?>
    <div id="preloader">
        <div class="line"></div>
    </div>
    <!-- Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/preload.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
