<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Bali Library</title>
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
                <h2>SIGN UP</h2>
            </div>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="signup-content" autocomplete="on" required>
            <div class="signup-border"></div>
            <label for="username">username</label>
            <input type="text" name="username" id="username" class="signup-content" autocomplete="on" required>
            <div class="signup-border"></div>
            <label for="password">password</label>
            <input type="password" name="password" id="password" class="signup-content" autocomplete="on" required>
            <div class="signup-border"></div>
            <label for="wa">No. WA</label>
            <input type="text" name="wa" id="wa" class="signup-content" autocomplete="on" required value="+62">
            <div class="signup-border"></div>
            <button name="submit" id="submit" class="btn-signup">SIGN UP</button>
            <p class="p-signup"><a href="dashboard.php">Batal Mendaftar</a></p>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        include 'db.php';

        $nama = ucwords($_POST['nama']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $wa = $_POST['wa'];

        $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES (
            null,
            '" . $nama . "',
            '" . $username . "',
            '" . $password . "',
            '" . $wa . "'
        )
        ");

        if ($insert) {
            echo '<script>alert("Pendaftaran Berhasil")</script>';
            echo '<script>window.location="login.php"</script>';
        } else {
            echo '<script>Pendaftaran Gagal</script>';
        }
    }

    ?>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>