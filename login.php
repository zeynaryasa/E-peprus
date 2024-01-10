<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Bali Library</title>
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
    <form action="" method="POST" class="form-login">
        <div class="box-login">
            <div class="title-login">
                <h2>LOGIN</h2>
            </div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="on" required class="login-content">
            <div class="login-border"></div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="on" required class="login-content">
            <div class="login-border"></div>
            <button name="submit" id="submit" class="btn-login">LOGIN</button>
            <div class="p-login">Belum punya akun?<a href="signup.php">Daftar</a></div>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        session_start();
        include 'db.php';
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        $login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '" . $username . "' AND password = '" . $password . "' ");
        if (mysqli_num_rows($login) > 0) {

            $dlogin = mysqli_fetch_object($login);
            $_SESSION['status_login'] = true;
            $_SESSION['u_global'] = $dlogin;
            $_SESSION['id'] = $dlogin->id;

            echo '<script>window.location="dashboard.php"</script>';
        } else {
            echo '<script>alert("Username atau Password Salah")</script>';
        }
    }

    ?>



    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>