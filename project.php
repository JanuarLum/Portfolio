<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/coba.css" rel="stylesheet" />
    <link href="css/card.css" rel="stylesheet" />
    <link href="css/project.css" rel="stylesheet" />
    <link href="css/preloader.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once "navbar.php";
    ?>
    <header class="dasar">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">PROJECT</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <section class="cards">
            <article class="card card1 card--1">
            <div class="card__info-hover">
                <svg class="card__like">
                </svg>
                <div class="card__clock-info">
                    <svg class="card__clock"></svg>
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://www.figma.com/proto/nJl6MDoq3X7vyupP1aq8Y2/Tugas?node-id=5%3A141" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Figma</span>
                <h3 class="card__title">E-learning Lewils</h3>
                <span class="card__by">UI/UX</span>
            </div>
            </article>
            
            <article class="card card1 card--2">
            <div class="card__info-hover">
                <svg class="card__like"></svg>
                <div class="card__clock-info">
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://github.com/AbimanyuLuthfi/Project_Tokobuku_Java" class="card_link">
                <div class="card__img--hover" style="background-image: url('assets/img/bookstore.jpeg');"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Java</span>
                <h3 class="card__title">BookStore admin</h3>
                <span class="card__by">GUI Java application</span>
            </div>
            </article>

            <article class="card card1 card--3">
            <div class="card__info-hover">
                <svg class="card__like">
                </svg>
                <div class="card__clock-info">
                    <svg class="card__clock"></svg>
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://mycar-sand.vercel.app/" class="card_link">
                <div class="card__img--hover" style="background-image: url('assets/img/webku.png');"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Frontend</span>
                <h3 class="card__title">Info Mobil</h3>
                <span class="card__by">HTML, CSS</span>
            </div>
            </article>
        </section>
        <section class="cards mt-5">
            <article class="card card1 card--2">
            <div class="card__info-hover">
                <svg class="card__like">
                </svg>
                <div class="card__clock-info">
                    <svg class="card__clock"></svg>
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://www.figma.com/proto/Mh7K78oqJef4nu384VXNma/Planner?node-id=2%3A879&scaling=scale-down&page-id=2%3A879&starting-point-node-id=2%3A1513" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Figma</span>
                <h3 class="card__title">Planner Phone</h3>
                <span class="card__by">UI/UX</span>
            </div>
            </article>
            
            <article class="card card1 card--2">
            <div class="card__info-hover">
                <svg class="card__like"></svg>
                <div class="card__clock-info">
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://github.com/JanuarLum/Data-Covid" class="card_link">
                <div class="card__img--hover" style="background-image: url('assets/img/graph.png');"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Python</span>
                <h3 class="card__title">Covid Data Graph</h3>
                <span class="card__by">visualisasi data</span>
            </div>
            </article>

            <article class="card card1 card--3">
            <div class="card__info-hover">
                <svg class="card__like">
                </svg>
                <div class="card__clock-info">
                    <svg class="card__clock"></svg>
                </div>
                
            </div>
            <div class="card__img"></div>
            <a href="https://github.com/JanuarLum/Rumus-Fisika" class="card_link">
                <div class="card__img--hover" style="background-image: url('assets/img/fisika.png');"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> C Language</span>
                <h3 class="card__title">Rumus Fisika</h3>
                <span class="card__by">Pehitungan matematis</span>
            </div>
            </article>
        </section>
<!-- </div> -->
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