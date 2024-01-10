<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>alert("Anda Tidak Memiliki Akses Ke Menu BUKU, silakan login terlebih dahulu")</script>';
    echo '<script>window.location="login.php"</script>';
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku | Bali Library</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="bd-dashboard">
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Bali Library</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="buku.php">BUKU</a></li>
                <li><a href="data-buku.php">Data Buku</a></li>
                <li><a href="data-user.php">Data User</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h1>Data Buku Bali Library</h1>
            <div class="box">
            </div>
        </div>
    </div>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>