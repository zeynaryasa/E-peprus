<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>alert("Anda Tidak Memiliki Akses Ke Menu ini, silakan login terlebih dahulu")</script>';
    echo '<script>window.location="login.php"</script>';
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User | Bali Library</title>
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
            <a href="signup.php"><button class="btn-tbh" id="">Tambah User</button></a>
            <div class="box-table">
                <table border="1" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>WA</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'db.php';
                        $no = 1;
                        $user = mysqli_query($conn, "SELECT * FROM tb_user ORDER BY id");
                        while ($row = mysqli_fetch_array($user)) {

                        ?>
                        <tr>
                            <td><?php echo  $no++ ?></td>
                            <td class="nama"><?php echo $row['nama'] ?></td>
                            <td class="username"><?php echo $row['username'] ?></td>
                            <td class="password"><?php echo $row['password'] ?></td>
                            <td class="wa"><?php echo $row['wa'] ?></td>
                            <td>
                                <a href="edit-user.php?id=<?php echo $row['id'] ?>">Edit</a> ||
                                <a href="hapus-user.php?id=<?php echo $row['id'] ?>"
                                    onclick="return confirm('Yakin untuk mengahapus data ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>