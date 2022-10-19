<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/coba.css" rel="stylesheet" />
    <link href="css/preloader.css" rel="stylesheet" />
    <link href="css/project.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .dasar {
            position: relative;
            width: 100%;
            height: auto;
            min-height: 35rem;
            padding: 15rem 0;
            background: url('assets/img/cool-background.png');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }
        h1, .h1 {
            font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 2.5rem;
            line-height: 2.5rem;
            letter-spacing: 0.8rem;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
                    background-clip: text;
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
        .img-fluid{
            border-radius: 50px;
            background: linear-gradient(145deg, #f0f0f0, #cacaca);
            box-shadow:  27px 27px 54px #bebebe,
                        -27px -27px 54px #ffffff;
        }
    </style>
</head>
<body>
    <?php
    require_once "navbar.php";
    ?>
    <header class="dasar">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Skills</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="projects-section bg-light" id="projects">
        <?php
            include "koneksi.php";
            if (!koneksi()){
                die("Koneksi Error");
            }
            $querySQL = "SELECT * FROM skill";
            $execQuerySQL = mysqli_query(koneksi(),$querySQL);
            
            if(mysqli_num_rows($execQuerySQL) > 0){
                while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>
                    <div class="container px-4 px-lg-5">
                        <!-- Featured Project Row-->
                        <div class="row gx-0 mb-4 mb-lg-5 mt-5 align-items-center">
                            <div class="col-xl-8 col-lg-7">
                                <img class="img-fluid mb-3 mb-lg-0" src="assets/img/skill.png"<?= $row['gambar'] ?> alt="..." />
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="featured-text text-center text-lg-left">
                                    <h4><?= $row['judul'] ?></h4>
                                    <p class="text-black-50 mb-0"><?= $row ['project'] ?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>  
                <?php
                    }
                }
                ?>
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