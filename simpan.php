<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/navbar.css" rel="stylesheet">
</head>
<body>

<?php
    require_once "navbar.php";
    include "koneksi.php";
    if(isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];
        $querySQL = "INSERT INTO portofolio (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
        $execSQL = mysqli_query(koneksi(),$querySQL);
        if ($execSQL) {
            header('Location: contact.php?simpan=1');
        }
        else {
            header('Location: contact.php?simpan=0');
        }
    }
?>
</body>
</html>