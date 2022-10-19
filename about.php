<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" /> 
    <link href="css/coba.css" rel="stylesheet" />
    <link href="css/preloader.css" rel="stylesheet" />
    <link href="css/project.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .atasan {
            position: relative;
            width: 100%;
            height: auto;
            min-height: 35rem;
            padding: 15rem 0;
            background: url('assets/img/foto1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
            filter: blur(5px);
        }
        h1, .h1 {
            font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 2.5rem;
            line-height: 2.5rem;
            letter-spacing: 0.8rem;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
                    background-clip: text; /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }
        @media (min-width: 768px) {
            h1, .h1 {
            font-size: 4rem;
            line-height: 4rem;
            }
        }
        @media (min-width: 992px) {
            .atasan {
            height: 100vh;
            padding: 0;
            }
            .atasan h1, .atasan .h1 {
            font-size: 6.5rem;
            line-height: 6.5rem;
            letter-spacing: 0.8rem;
            }
        }
        </style>
</head>
<body>
<?php
    require_once "navbar.php";
?>
<header class="atasan">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    </div>
            </div>
        </div>
    </header>
    <h1 class="mx-auto my-0 text-uppercase">About Me</h1>
    <section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mt-5">HI, I'm Januar</h3>
        <p class="text-center">Aku adalah seorang mahasiswa informatika Universitas Pembangunan Jaya</p>
    <?php
            include "koneksi.php";
            if (!koneksi()){
                die("Koneksi Error");
            }
            $querySQL = "SELECT * FROM about";
            $execQuerySQL = mysqli_query(koneksi(),$querySQL);
            
            if(mysqli_num_rows($execQuerySQL) > 0){
                while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>
                        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                            <div class="col-lg-6">
                                <div class="clip">
                                    <img class="img-fluid" src="assets/img/home.png" <?= $row['foto'] ?> alt="..." />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bg-black h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-lg-left">
                                            <h4 class="text-white text-center"><?= $row['nama'] ?></h4>
                                            <p class="mb-0 text-white-50 mt-4">Tanggal lahir : <?= $row['tgl_lahir'] ?></p>
                                            <p class="mb-0 text-white-50">Umur          : <?= $row['umur'] ?></p>
                                            <p class="mb-0 text-white-50">Kota          : <?= $row['kota'] ?></p>
                                            <p class="mb-0 text-white-50">Email         : <?= $row['email'] ?></p>
                                            <p class="mb-0 text-white-50">Phone         : <?= $row['phone'] ?></p>
                                            <hr class="d-none d-lg-block mb-0 ms-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                    </div>
    </section>
        <?php 
        require_once "footer.php";
        ?>
        <div id="preloader">
            <div class="line"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/preload.js"></script> 
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>