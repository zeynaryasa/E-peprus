<?php

session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>alert("Menu ini bisa di akses saat anda sudah login")</script>';
    echo '<script>window.location="login.php"</script>';
}
$buku = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id= '" . $_GET['id'] . "' ");
if (mysqli_num_rows($buku) == 0) {
    echo '<script>alert("Data yang anda cari tidak ada")</script>';
    echo '<script>window.location="data-buku.php"</script>';
}
$b = mysqli_fetch_object($buku);


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
        <div class="box-tbhdt">
            <div class="profil-title">
                <h2>Edit Data Buku</h2>
            </div>
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" id="judul" class="profil-content" autocomplete="on" required
                value="<?php echo $b->judul ?>">
            <div class="signup-border"></div>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="profil-content" autocomplete="on" required
                value="<?php echo $b->penerbit ?>">
            <div class="signup-border"></div>
            <label for="t_terbit">Tahun Terbit</label>
            <input type="text" name="t_terbit" id="t_terbit" class="profil-content" autocomplete="on" required
                value="<?php echo $b->t_terbit ?>">
            <div class="signup-border"></div>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="profil-content" autocomplete="on" required
                value="<?php echo $b->pengarang ?>">
            <div class="signup-border"></div>
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" value="<?php echo $b->gambar ?>">
            <button name="submit" id="submit" class="btn-profil">SUBMIT</button>
            <p class="p-profil"><a href="data-buku.php">Batalkan tambah data</a></p>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db.php';

        $judul = ucwords($_POST['judul']);
        $penerbit = ucwords($_POST['penerbit']);
        $t_terbit = $_POST['t_terbit'];
        $pengarang = ucwords($_POST['pengarang']);
        $gambar = $_POST['image'];

        $update = mysqli_query($conn, "UPDATE tb_buku SET
        judul = '" . $judul . "',
        penerbit = '" . $penerbit . "',
        t_terbit = '" . $t_terbit . "',
        pengarang = '" . $pengarang . "',
        gambar = '" . $gambar . "'
        WHERE id = '" . $b->id . "'
        
        ");

        if ($update) {
            echo '<script>alert("Data berhasil diubah")</script>';
            echo '<script>window.location="data-buku.php"</script>';
        }
    }
    ?>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>