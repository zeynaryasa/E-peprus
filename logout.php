<?php
session_start();
if ($_SESSION['status_login'] != true) {
    echo '<script>alert("Anda belum login")</script>';
    echo '<script>window.location="login.php"</script>';
} else {
    session_destroy();
    echo '<script>alert("Log Out Berhasil")</script>';
    echo '<script>window.location="dashboard.php"</script>';
}