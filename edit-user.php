<?php

session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>alert("Menu ini bisa di akses saat anda sudah login")</script>';
    echo '<script>window.location="login.php"</script>';
}
$user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id= '" . $_GET['id'] . "' ");
if (mysqli_num_rows($user) == 0) {
    echo '<script>alert("Data yang anda cari tidak ada")</script>';
    echo '<script>window.location="data-user.php"</script>';
}
$u = mysqli_fetch_object($user);


?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data | Bali Library</title>
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
    <form action="" method="POST">
        <div class="box-signup">
            <div class="signup-title">
                <h2>Edit Data Buku</h2>
            </div>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="signup-content" autocomplete="on" required
                value="<?php echo $u->nama ?>">
            <div class="signup-border"></div>
            <label for="username">username</label>
            <input type="text" name="username" id="username" class="signup-content" autocomplete="on" required
                value="<?php echo $u->username ?>">
            <div class="signup-border"></div>
            <label for="password">password</label>
            <input type="password" name="password" id="password" class="signup-content" autocomplete="on" required
                value="<?php echo $u->password ?>">
            <div class="signup-border"></div>
            <label for="wa">No. WA</label>
            <input type="text" name="wa" id="wa" class="signup-content" autocomplete="on" required
                value="<?php echo $u->wa ?>">
            <div class="signup-border"></div>
            <button name="submit" id="submit" class="btn-profil">SUBMIT</button>
            <p class="p-profil"><a href="data-user.php">Batalkan Edit data</a></p>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db.php';

        $nama = ucwords($_POST['nama']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $wa = $_POST['wa'];

        $update = mysqli_query($conn, "UPDATE tb_user SET
        nama = '" . $nama . "',
        username = '" . $username . "',
        password = '" . $password . "',
        wa = '" . $wa . "'
        WHERE id = '" . $u->id . "'
        
        ");

        if ($update) {
            echo '<script>alert("Data berhasil diubah")</script>';
            echo '<script>window.location="data-user.php"</script>';
        }
    }
    ?>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>