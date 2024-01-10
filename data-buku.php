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
    <title>Data Buku | Bali Library</title>
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
            <a href="tbh-dtbuku.php"><button class="btn-tbh" id="">Tambah Data</button></a>
            <div class="box-table">
                <table border="1" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="30%">Judul</th>
                            <th width="20%">Penerbit</th>
                            <th width="10%">Tahun terbit</th>
                            <th>Pengarang</th>
                            <th>Gambar</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $buku = mysqli_query($conn, "SELECT * FROM tb_buku ORDER BY id");
                        while ($row = mysqli_fetch_array($buku)) {

                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td class="judul"><?php echo $row['judul'] ?></td>
                            <td class="judul"><?php echo $row['penerbit'] ?></td>
                            <td class="judul"><?php echo $row['t_terbit'] ?></td>
                            <td class="judul"><?php echo $row['pengarang'] ?></td>
                            <td class="judul"><?php echo $row['gambar'] ?></td>
                            <td>
                                <a href="edit-buku.php?id=<?php echo $row['id'] ?>">Edit</a> || <a
                                    href="hapus-buku.php?id=<?php echo $row['id'] ?>"
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