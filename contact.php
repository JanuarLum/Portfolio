<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/coba.css" rel="stylesheet" />
    <link href="css/preloader.css" rel="stylesheet" />
    <link href="css/project.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .masthead {
        position: relative;
        width: 100%;
        height: auto;
        min-height: 35rem;
        padding: 15rem 0;
        background: url("assets/img/gambarku.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
      }
      .masthead h1, .masthead .h1 {
        font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 2.5rem;
        line-height: 2.5rem;
        letter-spacing: 0.8rem;
        background: linear-gradient(90deg, #e55d87, #5fc3e4);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
                background-clip: text;
      }
      @media (min-width: 768px) {
        .masthead h1, .masthead .h1 {
          font-size: 4rem;
          line-height: 4rem;
        }
      }
      @media (min-width: 992px) {
        .masthead {
          height: 100vh;
          padding: 0;
        }
        .masthead h1, .masthead .h1 {
          font-size: 6.5rem;
          line-height: 6.5rem;
          letter-spacing: 0.8rem;
        }
      }
      form {
        background: white;
        padding: 3rem;
        height: 520px;
        width: 70%;
        border-radius: 20px;
        border-left: 1px solid grey;
        border-top : 1px solid grey;
        backdrop-filter: blur(10px);
        box-shadow: 20px 20px 40px -6px (rgba(0,0,0,0.2));
        text-align: center;
        position: relative;
      }
      .projects-section {
        text-align: center;
        justify-content: center;
      }
      </style>
</head>
<body>
    <?php
    require_once "navbar.php";
    ?>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">My Contact</h1>
                </div>
            </div>
        </div>
    </header>
    
    <section class="projects-section bg-light" id="projects">
      <div class="container mt-5 px-6 px-lg-5">
        <form action="" method="POST" class="ms-5">
          <h3>Contact me</h3>
          <table class="table">
            <tr>
              <th>
                <div class="col-auto mb-3 mt-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama">
                </div>
              </th>
              <th>
                <div class="col-auto mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Input Email" name="email">
                </div>
              </th>
            </tr>
          </table>
          <div class="row">
            <div class="mb-3 mt-3">
              <label for="subjek" class="form-label">Subjek:</label>
              <input type="text" class="form-control" id="subjek" placeholder="Subject" name="subjek">
            </div>
            <div class="mb-3 mt-3">
              <label for="pesan" class="form-label">Message:</label>
              <textarea class="form-control" id="pesan" placeholder="Message" name="pesan"></textarea>
            </div>
          </div>
        <button type="submit" class="btn">simpan</button>
        </form>
      </div>
    </section>
    <?php
    require_once "navbar.php";
    include "koneksi.php";
    if(isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];
        $querySQL = "INSERT INTO portofolio (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
       
    }
?>
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

</script>
</body>
</html>