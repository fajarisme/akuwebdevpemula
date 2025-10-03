<?php
session_start();
// Cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Selamat Datang di Dashboard</h2>
    <p>Halo, <strong><?= $_SESSION['username']; ?></strong>!</p>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>
</html>